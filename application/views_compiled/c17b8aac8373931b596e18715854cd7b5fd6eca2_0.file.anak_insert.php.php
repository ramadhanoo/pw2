<?php
/* Smarty version 3.1.33, created on 2019-06-21 08:10:27
  from '/var/www/html/pw2/application/views/anak_insert.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c2e83b09807_29889739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c17b8aac8373931b596e18715854cd7b5fd6eca2' => 
    array (
      0 => '/var/www/html/pw2/application/views/anak_insert.php',
      1 => 1561079414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c2e83b09807_29889739 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<form name="anak_insert" method="post" action="<?php echo site_url('anak/insert_action');?>
" enctype="multipart/form-data">

	<table border="1" class="table table-striped">
		<tr>
			<td>Nama Ibu</td>
			<td>
				<select name="id_ibu" class="form-control">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftar_ibu']->value, 'ibu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ibu']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['ibu']->value['id_ibu'];?>
"><?php echo $_smarty_tpl->tpl_vars['ibu']->value['nama_ibu'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				
			</td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>
				<input type="text" name="nama_anak" class="form-control">
				<?php echo form_error('nama_anak');?>

			</td>
		</tr>
		<tr>
			<td>Gender Anak</td>
			<td>
				<div class="radio">
					<input type="radio" name="gender_anak" value="1" checked> Pria
				</div>
				<div class="radio">
					<input type="radio" name="gender_anak" value="2"> Wanita
				</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"><i class="fas fa-save"></i> Insert</button></td>
		</tr>
	</table>

</form><?php }
}
