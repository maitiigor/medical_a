<template>

</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                isCameraOpen: false,
                isPhotoTaken: false,
                isShotPhoto: false,
                isLoading: false,
                link: '#',
                isModalVisible:false,
            }
        },

        methods: {

            modalVisible(){
              this.isModalVisible = true
            },
            toggleCamera() {
                if(this.isCameraOpen) {
                    this.isCameraOpen = false;
                    this.isPhotoTaken = false;
                    this.isShotPhoto = false;
                    this.stopCameraStream();
                }
                else {
                    this.isCameraOpen = true;
                    this.createCameraElement();
                }
            },

            createCameraElement() {
                this.isLoading = true;

                const constraints = (window.constraints = {
                    audio: false,
                    video: true,
                });


                navigator.mediaDevices
                    .getUserMedia(constraints)
                    .then(stream => {
                        this.isLoading = false;
                        this.$refs.camera.srcObject = stream;
                    })
                    .catch(error => {
                        this.isLoading = false;
                        alert("May the browser didn't support or there is some errors.");
                    });
            },

            stopCameraStream() {
                let tracks = this.$refs.camera.srcObject.getTracks();

                tracks.forEach(track => {
                    track.stop();
                });
            },

            takePhoto() {
                if(!this.isPhotoTaken) {
                    this.isShotPhoto = true;

                    const FLASH_TIMEOUT = 50;

                    setTimeout(() => {
                        this.isShotPhoto = false;
                    }, FLASH_TIMEOUT);
                }

                this.isPhotoTaken = !this.isPhotoTaken;

                const context = this.$refs.canvas.getContext('2d');
                context.drawImage(this.$refs.camera, 0, 0, 450, 337.5);
            },

            downloadImage() {
                const download = document.getElementById("downloadPhoto");
                const canvas = document.getElementById("photoTaken").toDataURL("image/jpeg")
                    .replace("image/jpeg", "image/jpeg");
                const data = new FormData();
                data.append('picture',canvas);
                data.append('bmi',bmi);
                data.append('age',age);
                data.append('weight',weight);
                data.append('email',email);
                data.append('name',name);
                data.append('surname',surname);
                data.append('ward',ward);
                data.append('lga',lga);



                axios.post('/test',data).then(res =>{
                    console.log("a");
                    console.log(res.data)
                });
            }
        }

    }
</script>
