<?php
/* Smarty version 3.1.33, created on 2019-06-21 08:12:20
  from '/var/www/html/pw2/application/views/anak_update.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c2ef40d31e6_30864010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fcb1770374d1adc048ba2bd9f9e0f76109c847' => 
    array (
      0 => '/var/www/html/pw2/application/views/anak_update.php',
      1 => 1561079539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c2ef40d31e6_30864010 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="anak_update" method="post" action="<?php echo site_url("anak/update_action/".((string)$_smarty_tpl->tpl_vars['data_anak']->value['id_anak']));?>
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
					<?php if ($_smarty_tpl->tpl_vars['ibu']->value['id_ibu'] == $_smarty_tpl->tpl_vars['data_anak']->value['id_ibu']) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['ibu']->value['id_ibu'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['ibu']->value['nama_ibu'];?>
</option>
					<?php } else { ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['ibu']->value['id_ibu'];?>
"><?php echo $_smarty_tpl->tpl_vars['ibu']->value['nama_ibu'];?>
</option>
					<?php }?>
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
			<input type="text" name="nama_anak" value="<?php echo $_smarty_tpl->tpl_vars['data_anak']->value['nama_anak'];?>
"  class="form-control">
			<input type="hidden" name="nama_anak_old" value="<?php echo $_smarty_tpl->tpl_vars['data_anak']->value['nama_anak'];?>
">
			<?php echo form_error('nama_anak');?>

		</td>
	</tr>
	<tr>
			<td>Gender Anak</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['data_anak']->value['gender_anak'] == 1) {?>
					<div class="radio">
						<input type="radio" name="gender_anak" value="1" checked> Pria
					</div>
					<div class="radio">
						<input type="radio" name="gender_anak" value="2"> Wanita
					</div>
				<?php } else { ?>
					<div class="radio">
						<input type="radio" name="gender_anak" value="1"> Pria
					</div>
					<div class="radio">
						<input type="radio" name="gender_anak" value="2" checked> Wanita
					</div>
				<?php }?>
				
			</td>
		</tr>
	<tr>
		<td></td>
		<td><button class="btn btn-primary"><i class="fas fa-save"></i> Update</button></td>
	</tr>
</table>

</form><?php }
}
