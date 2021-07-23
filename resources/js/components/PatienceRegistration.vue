<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Patience Registration Page</div>

                    <div class="card-body">
                        <form method="POST" action="/register/patience">


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" v-model="name"  required autocomplete="name" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">Surname</label>

                                <div class="col-md-6">
                                    <input id="surname"  class="form-control"  v-model="surname" required autocomplete="name" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control"  v-model="age" required autocomplete="name" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                                <div class="col-md-6">
                                    <select class="form-control"  v-model="gender">
                                        <option value="male">
                                            Male
                                        </option>
                                        <option value="female">
                                            Female
                                        </option>
                                    </select>
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="weight" class="col-md-4 col-form-label text-md-right">Weight in pound</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control"  placeholder="" v-model="weight" v-on:keyup="calculate()" required autocomplete="weight" autofocus>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="height" class="col-md-4 col-form-label text-md-right">Height in inches</label>

                                <div class="col-md-6">
                                    <input id="height" type="number" class="form-control" name="height" v-model="height" v-on:keyup="calculate()" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bmi" class="col-md-4 col-form-label text-md-right">BMI</label>

                                <div class="col-md-6">
                                    <input id="bmi" type="number" class="form-control" v-model="bmi" name="bmi" required autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ward" class="col-md-4 col-form-label text-md-right">Ward</label>

                                <div class="col-md-6">
                                    <input id="ward" type="text" v-model="ward" class="form-control" name="ward"  required autocomplete="name" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lga" class="col-md-4 col-form-label text-md-right">Local Government</label>

                                <div class="col-md-6">
                                    <input id="lga" type="text" class="form-control" v-model="lga" name="lga"  required autocomplete="name" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <input id="state" type="text" v-model="state" class="form-control " name="state"  required autocomplete="name" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email" required autocomplete="email">


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="password" name="password" required autocomplete="new-password">


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"  class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" v-model="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row"></div>
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary " @click ="modalVisible">
                                    Proceed to capture image
                                </button>
                            </div>
                            <div v-show="res" class="vue-modal-backdrop">
                                <div class="vue-modal">
                                    <div class="vue-modal-header">
                                        Message
                                    </div>
                                    <div class="vue-modal-bdy">
                                        Successful registration
                                    </div>
                                    <section class="modal-footer">
                                        <button class="btn-close" @click="btnClose">Close</button>
                                    </section>
                                </div>

                            </div>
                                <div v-show="isModalVisible" class="vue-modal-backdrop">
                                    <div class="vue-modal">
                                        <div class="">
                                            <div class="camera-button">
                                                <button type="button" class="button is-rounded justify-content-center" :class="{ 'is-primary' : !isCameraOpen, 'is-danger' : isCameraOpen}" @click="toggleCamera">
                                                    <span v-if="!isCameraOpen">Open Camera</span>
                                                    <span v-else>Close Camera</span>
                                                </button>
                                            </div>

                                            <div v-show="isCameraOpen && isLoading" class="camera-loading">
                                                <ul class="loader-circle">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div v-if="isCameraOpen" v-show="!isLoading" class="camera-box" :class="{ 'flash' : isShotPhoto }">

                                                <div class="camera-shutter" :class="{'flash' : isShotPhoto}"></div>

                                                <video v-show="!isPhotoTaken" ref="camera" :width="450" :height="337.5" autoplay></video>

                                                <canvas v-show="isPhotoTaken" id="photoTaken" ref="canvas" :width="450" :height="337.5"></canvas>
                                            </div>

                                            <div v-if="isCameraOpen && !isLoading" class="camera-shoot">
                                                <button type="button" class="button" @click="takePhoto">
                                                    <img src="https://img.icons8.com/material-outlined/50/000000/camera--v2.png">
                                                </button>
                                            </div>

                                            <div v-if="isPhotoTaken && isCameraOpen" class="camera-download">
                                                <a id="downloadPhoto" download="my-photo.jpg" class="button btn-primary" role="button" @click="downloadImage">
                                                    Save Record
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
               name: '',
                isCameraOpen: false,
                isPhotoTaken: false,
                isShotPhoto: false,
                isLoading: false,
                link: '#',
                isModalVisible:false,
                weight: '',
                height: '',
                state:'',
                gender:'',
                bmi:'',
                age:'',
                email:'',
                surname:'',
                password:'',
                password_confirmation:'',
                lga:'',
                ward:'',
                res:false,
                message:''


            }

        },
        methods:{
            calculate: function(){
                this.bmi = this.weight/this.height
            },
            btnClose(){
                this.res=false;
            },
            modalVisible(){
                this.isModalVisible = true
            },
            toggleCamera() {
                if(this.isCameraOpen) {
                    this.isCameraOpen = false;
                    this.isPhotoTaken = false;
                    this.isShotPhoto = false;
                    this.isModalVisible = false;
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
                data.append('bmi',this.bmi);
                data.append('age',this.age);
                data.append('weight',this.weight);
                data.append('email',this.email);
                data.append('name',this.name);
                data.append('surname',this.surname);
                data.append('ward',this.ward);
                data.append('lga',this.lga);
                data.append('state', this.state);
                data.append('password', this.password);
                data.append('height',this.height);
                data.append('gender',this.gender);

                let config =    {
                    headers:{
                        'ContentT-Type': "multipart/form-data"
                    }
                };



                axios.post('/register/patience',data,config).then(res =>{
                    if(res.data.message === "success"){
                        console.log("successful")
                        this.toggleCamera();
                        this.clearForm();
                        this.res = true;
                        this.message = res.data.message
                    }else{
                        console.log("something went wrong");
                        this.toggleCamera();
                        this.res = true;
                        this.message = res.data.message;
                    }
                    console.log(res.data)
                });
            },
            clearForm(){
                this.weight= '';
                 this.height= '';
                    this.state='';
                    this.gender='';
                    this.bmi='';
                    this.age='';
                    this.email='';
                    this.surname='';
                    this.password='';
                    this.password_confirmation='';
                    this.lga='';
                    this.ward='';
            },



        },
        computed:{

        }
    }
</script>
