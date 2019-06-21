<?php
/* Smarty version 3.1.33, created on 2019-06-21 08:12:49
  from '/var/www/html/pw2/application/views/anak_read.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c2f1166ac73_00450395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356b821dd9711abbbe3b29b91ea35a6b41a73294' => 
    array (
      0 => '/var/www/html/pw2/application/views/anak_read.php',
      1 => 1561079564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c2f1166ac73_00450395 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Anak</h1>
<hr class="sidebar-divider">

<!--body page-->
<a href="<?php echo site_url('anak/insert');?>
" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>ID Anak</th>
			<th>Nama Ibu</th>
			<th>Nama Anak</th>
			<th>Gender Anak</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftar_anak']->value, 'anak');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['anak']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['anak']->value['id_anak'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['anak']->value['nama_ibu'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['anak']->value['nama_anak'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['anak']->value['gender_anak'] == 1) {?>
					Pria
				<?php } else { ?>
					Wanita
				<?php }?>
			</td>
			<td>
				<a href="<?php echo site_url("anak/update/".((string)$_smarty_tpl->tpl_vars['anak']->value['id_anak']));?>
" class="btn btn-success" >
				<i class="fa fa-edit"></i> Update
				</a>
				
				<a href="<?php echo site_url("anak/delete_action/".((string)$_smarty_tpl->tpl_vars['anak']->value['id_anak']));?>
" class="btn btn-danger">
				<i class="fa fa-trash"></i> Delete
				</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<!--end of body page-->

</div><?php }
}
