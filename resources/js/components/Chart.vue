<template>
    <div>
        <div class="row">
            <div class="col-lg-6">
                <apexchart :width="chart.width" :height="chart.height" :type="chart.type" :options="chart.options" :series="chart.series"></apexchart>

            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <apexchart :width="chart1.width" :height="chart1.height" :type="chart1.type" :options="chart1.options" :series="chart1.series"></apexchart>

            </div>
            <!-- /.col-md-6 -->
        </div>

    </div>
</template>

<script>
    export default {
        props: {

        },
        data(){
           return{
               chart: Object,
               chart1: Object
           }
        },
        created(){
          axios.get('/chart').then(res =>{
              console.log(res.data);
          this.chart = res.data.chart;
          this.chart1 = res.data.chart1 ;
          })  ;
        }
    }
</script>