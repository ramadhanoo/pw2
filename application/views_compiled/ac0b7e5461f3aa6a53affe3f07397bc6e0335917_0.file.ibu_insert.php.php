<?php
/* Smarty version 3.1.33, created on 2019-06-19 18:28:48
  from '/var/www/html/pw2/application/views/ibu_insert.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a1c70e46af1_47944191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0b7e5461f3aa6a53affe3f07397bc6e0335917' => 
    array (
      0 => '/var/www/html/pw2/application/views/ibu_insert.php',
      1 => 1560924717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0a1c70e46af1_47944191 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<form name="ibu_insert" method="post" action="<?php echo site_url('ibu/insert_action');?>
" enctype="multipart/form-data">

	<table border="1" class="table table-striped">
		<tr>
			<td>Nama Ibu</td>
			<td>
				<input type="text" name="nama_ibu" class="form-control">
				<?php echo form_error('nama_ibu');?>

			</td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>
				<input type="text" name="umur_ibu" class="form-control">
				<?php echo form_error('umur_ibu');?>

			</td>
		</tr>
		<tr>
			<td>Foto Ibu</td>
			<td>
				<input type="file" name="userfile" class="form-control">
				<?php echo form_error('umur_ibu');?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><button class="btn btn-primary"><i class="fas fa-save"></i> Insert</button></td>
		</tr>
	</table>

</form><?php }
}
