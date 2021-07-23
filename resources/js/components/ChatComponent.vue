<template>
    <div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-12">
                Chat with Doctor
            </div>
        </div>
        <div class="row" v-for="(doctor,k) in doctors" :key ="k">
            <div class="col-12" >
                Dr {{doctor.name}} {{doctor.surname}}
            </div>
            <div class="col-12">
                <input type="text" v-model="chatBox"><button @click="send(doctor.id)">Send</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "chat-component",
        props: {

        },
        data(){
            return{
                doctors: {},
                chat_input:false,
                chatBox:'',


            }
        },
        created(){
            axios.get('/get_doctors').then(res =>{

                this.doctors = res.data;
                console.log(this.patience);
            })  ;
        },
        methods:{
            send(k){
                let data = new FormData();
                data.append('id',k);
                data.append('message',this.chatBox);
                axios.post('/chat',data).then(res=>{
                    console.log(res.data);
                });
            }

        },
    }

</script>

<style scoped>

</style>