<?php
/* Smarty version 3.1.33, created on 2019-06-19 14:53:14
  from '/var/www/html/pw2/application/views/pahlawan_chart.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d09e9eae0cb79_70665862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11bf50f0fcdeb634d9cd1a2513cb161c3ba10c0' => 
    array (
      0 => '/var/www/html/pw2/application/views/pahlawan_chart.php',
      1 => 1560930759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d09e9eae0cb79_70665862 (Smarty_Internal_Template $_smarty_tpl) {
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
        categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftar_pahlawan']->value, 'pahlawan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pahlawan']->value) {
?>
                        '<?php echo $_smarty_tpl->tpl_vars['pahlawan']->value['nama'];?>
',
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
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
        data: [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftar_pahlawan']->value, 'pahlawan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pahlawan']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['pahlawan']->value['usia'];?>
,
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              ]
    }
    ]
});
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
