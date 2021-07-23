<template>
    <div>
    <div class="form-group row">
        <label for="weight" class="col-md-4 col-form-label text-md-right">Weight in pound</label>

        <div class="col-md-6">
            <input id="weight" type="text" class="form-control" name="weight" placeholder="" v-model="weight" v-on:keyup="calculate()" required autocomplete="weight" autofocus>

        </div>
    </div>
    <div class="form-group row">
        <label for="height" class="col-md-4 col-form-label text-md-right">Height in inches</label>

        <div class="col-md-6">
            <input id="height" type="text" class="form-control" name="height" v-model="height" v-on:keyup="calculate()" required autocomplete="name" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="bmi" class="col-md-4 col-form-label text-md-right">BMI</label>

        <div class="col-md-6">
            <input id="bmi" type="text" class="form-control" v-model="bmi" name="bmi" required autocomplete="name" autofocus>
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
                weight: '',
                height: '',
                bmi:'',

            }

        },
        methods:{
            calculate: function(){
                this.bmi = this.weight/this.height
            },

        },
        computed:{

        }
    }
</script>
