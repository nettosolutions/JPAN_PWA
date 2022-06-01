<template>
    <div>
        <apexchart 
            type="line" 
            height="350" 
            :options="chartOptions" 
            :series="series"
        ></apexchart>
    </div>
</template>
<script>
    import VueApexCharts from "vue3-apexcharts";

    export default{
        components:{
            apexchart: VueApexCharts,
        },
        data : function() {
            return {
                chartOptions: {
                    chart: {
                        height: 350,
                        type: 'line',
                        zoom: {
                            enabled: false
                        }
                    },
                    dataLabels: {
                        bled: false
                    },
                    stroke: {
                        curve: 'straight'
                    },
                    title: {
                        text: 'Product Trends by Month',
                        align: 'left'
                    },
                    grid: {
                        row: {
                            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                    }
                },
                series: [
                    {
                        name: "Part time",
                        data: [10, 41, 35, 51, 49, 62, 69, 91, 48]
                    },
                    {
                        name: "Full time",
                        data:[21, 56, 32, 87, 98, 54, 61, 18, 95]
                    }
                    ],
            };
                
        },
    };
</script>