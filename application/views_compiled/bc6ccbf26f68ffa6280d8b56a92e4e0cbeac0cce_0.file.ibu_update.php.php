<?php
/* Smarty version 3.1.33, created on 2019-06-19 13:10:41
  from '/var/www/html/pw2/application/views/ibu_update.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d09d1e14efd16_77744461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6ccbf26f68ffa6280d8b56a92e4e0cbeac0cce' => 
    array (
      0 => '/var/www/html/pw2/application/views/ibu_update.php',
      1 => 1560924640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d09d1e14efd16_77744461 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="ibu_update" method="post" action="<?php echo site_url("ibu/update_action/".((string)$_smarty_tpl->tpl_vars['data_ibu']->value['id_ibu']));?>
" enctype="multipart/form-data">

<table border="1" class="table table-striped">
	<tr>
		<td>Nama Ibu</td>
		<td>
			<input type="text" name="nama_ibu" value="<?php echo $_smarty_tpl->tpl_vars['data_ibu']->value['nama_ibu'];?>
"  class="form-control">
			<input type="hidden" name="nama_ibu_old" value="<?php echo $_smarty_tpl->tpl_vars['data_ibu']->value['nama_ibu'];?>
">
			<?php echo form_error('nama_ibu');?>

		</td>
	</tr>
	<tr>
		<td>Umur Ibu</td>
		<td>
			<input type="text" name="umur_ibu" value="<?php echo $_smarty_tpl->tpl_vars['data_ibu']->value['umur_ibu'];?>
"  class="form-control">
			<?php echo form_error('umur_ibu');?>

		</td>
	</tr>
	<tr>
			<td>Foto Ibu</td>
			<td>
				<input type="file" name="userfile" class="form-control">
				<?php echo form_error('foto_ibu');?>

				
				<br />
				<?php if ($_smarty_tpl->tpl_vars['data_ibu']->value['foto_ibu'] != '') {?>
				<img src="<?php echo base_url("uploads/".((string)$_smarty_tpl->tpl_vars['data_ibu']->value['foto_ibu']));?>
" width="100">
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
