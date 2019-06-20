<?php
/* Smarty version 3.1.33, created on 2019-06-20 14:29:02
  from '/var/www/html/pw2/application/views/chart.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0b35be067964_15748064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6e6f3300a55b2b6d6442d7f5fd19ea72b214bb' => 
    array (
      0 => '/var/www/html/pw2/application/views/chart.php',
      1 => 1560930684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0b35be067964_15748064 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
	<title>Chart</title>
</head>
<body>

<div id="container-chart"></div>

<?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
Highcharts.chart('container-chart', {
    chart: {
        type: 'column'
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
        column: {
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
        name: 'Usia',
        data: [1016, 1001, 4436, 738, 40]
    }
    ]
});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
