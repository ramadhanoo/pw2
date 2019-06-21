<?php
/* Smarty version 3.1.33, created on 2019-06-21 08:12:34
  from '/var/www/html/pw2/application/views/export_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c2f023b4289_10390979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b5144b33ed1e5d800e44708cbe113ff7478142' => 
    array (
      0 => '/var/www/html/pw2/application/views/export_view.php',
      1 => 1560944327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c2f023b4289_10390979 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Codeigniter</title>

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>

	<table class="table table-striped table-hover" id="dataTable">
		<thead>
			<tr>
				<th>ID Ibu</th>
				<th>Nama Presiden</th>
				<th>Lama Menjabat</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Soekarno</td>
				<td>4 Tahun</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Soeharto</td>
				<td>32 Tahun</td>
			</tr>
			<tr>
				<td>3</td>
				<td>BJ Habibie</td>
				<td>1 Tahun</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Abdurahman Wahid</td>
				<td>2 Tahun</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Megawati</td>
				<td>3 Tahun</td>
			</tr>
			<tr>
				<td>6</td>
				<td>SB Yudhoyono</td>
				<td>10 Tahun</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Joko Widodo</td>
				<td>5 Tahun</td>
			</tr>
		</tbody>
	</table>

	<a href="<?php echo '<?php ';?>echo site_url('export/download');<?php echo '?>';?>" class="btn btn-primary"><i class="fas fa-download"></i> download</a>


</body>
</html><?php }
}
