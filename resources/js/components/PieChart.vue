<template>
    <apexchart 
        type="donut" 
        width="450" 
        :options="chartOptions" 
        :series="series">
    </apexchart>
</template>
<script>
import VueApexCharts from "vue3-apexcharts";

export default{
    components: {
          apexchart: VueApexCharts,
    },
    data: function(){
        return{
            series: [44, 55, 13, 43, 22],
            chartOptions: {
                chart: {
                    type: 'pie',
                    background: '#fff'
                },
                labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                            chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
            }]
          },
          
          
        };
    },    
};  
    </script>
