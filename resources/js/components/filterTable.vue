<template>
    <div>
        <div class="row">
        <div class="col-4">
            <div class="form-row">
            <label>Filter</label>
            <select v-model="filter" class="form-control">
                <option value="age" >Age</option>
                <option value="bmi">BMI</option>
                <option value="gender">gender</option>
            </select>
            <select v-model="order" class="form-control">
                <option value="ASC">Ascending</option>
                <option value="DESC">Descending</option>
            </select>
                <button class="btn-danger" @click="getFilter()">Filter</button>
            </div>


        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">
             <table class="table table-striped table-bordered">
                 <caption>List of Patience</caption>
                 <thead>
                 <tr>
                     <th scope="col">
                         Name
                     </th>
                     <th scope="col">
                         Surname
                     </th>
                     <th scope="col">
                         Age
                     </th>
                     <th scope="col">
                         BMI
                     </th>
                     <th scope="col">
                         Diagnoses
                     </th>
                 </tr>
                 </thead>
                 <tbody>
                 <tr  v-for="(input,k) in patience" :key="k" v-model="patience">
                     <td>{{input.name}} </td>
                     <td>{{input.surname}} </td>
                     <td>{{input.age}}</td>
                     <td>{{input.bmi}}</td>
                     <td><a v-bind:href="'/patience_encounter/'+input.id" class="btn btn-primary">Diagnose</a> </td>
                 </tr>
                 </tbody>


             </table>
            </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: {

        },
        data(){
            return{
                patience: {},
                filter:'',
                order:'',

            }
        },
        created(){
            axios.get('/patience_table').then(res =>{

                this.patience = res.data;
                console.log(this.patience);
            })  ;
        },
        methods:{
          getFilter(){
              let data = new FormData();
              data.append('filter', this.filter);
              data.append('order', this.order);
              axios.post('/filter',data).then(res =>{
                this.patience = res.data;
              });
          }

        },
    }
</script>