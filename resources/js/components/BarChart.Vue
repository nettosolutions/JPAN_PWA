<template>
  <div>
    <apexchart
      width="500"
      type="bar"
      :options="chartOptions"
      :series="series"
    ></apexchart>
  </div>
</template>
<script>
import VueApexCharts from "vue3-apexcharts";
export default {
    components: {
        apexchart: VueApexCharts,
    },
    data: function() {
        return {
        chartOptions: {
            chart: {
            id: "vuechart-example",
            background: '#fff',
            width: '500px',
            },
            xaxis: {
            categories: [0, 1, 2, 3, 4, 5, 6, 7],
            },
        },
        series: [
            {
            name: "Employees",
            data: [30, 40, 35, 50, 49, 80, 54, 34],
            },
        ],
        };
    },
};

</script>