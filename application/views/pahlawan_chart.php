<html>
<head>
	<title>Chart</title>
</head>
<body>

<div id="container"></div>

<script src="<?php echo base_url('highcharts.js');?>"></script>
<script type="text/javascript">
Highcharts.chart('container-chart', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Populasi Penduduk Dunia'
    },
    subtitle: {
        text: 'Dibagi per Benua'
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
        bar: {
            dataLabels: {
                enabled: true
            }
        },
        series: {
            stacking: 'normal'
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
    series: [
    {
        name: 'Usia Ibu',
        data: [1016, 1001, 4436, 738, 40]
    }
    ]
});
</script>

</body>
</html>