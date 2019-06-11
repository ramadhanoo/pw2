<html>
<head>
	<title>Chart</title>
</head>
<body>

<div id="container-chart"></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
Highcharts.chart('container-chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Historic World Population by Region'
    },
    subtitle: {
        text: 'Source: Wikipedia.org'
    },
    xAxis: {
        categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (millions)'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        column: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Year 2016',
        data: [1216, 1001, 4436, 738, 40]
    }]
});
</script>

</body>
</html>