<?php
/* Smarty version 3.1.33, created on 2019-06-26 07:52:20
  from '/var/www/html/pw2/application/views/ibu_read.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d12c1c452b108_72270995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec40b3ec4ff5ddd6da827469750c5c046f944714' => 
    array (
      0 => '/var/www/html/pw2/application/views/ibu_read.php',
      1 => 1561510339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d12c1c452b108_72270995 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="container-fluid">

<h1 class="h3 mb-2 text-gray-800">Daftar Ibu</h1>
<hr class="sidebar-divider">

<!--body page-->
<a href="<?php echo site_url('ibu/insert');?>
" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-striped table-hover" id="dataTable">
	<thead>
		<tr>
			<th>ID Ibu</th>
			<th>Nama Ibu</th>
			<th>Umur Ibu</th>
			<th>Foto Ibu</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftar_ibu']->value, 'ibu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ibu']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['ibu']->value['id_ibu'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ibu']->value['nama_ibu'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ibu']->value['umur_ibu'];?>
</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['ibu']->value['foto_ibu'] != '') {?>
				<img src="<?php echo base_url("uploads/".((string)$_smarty_tpl->tpl_vars['ibu']->value['foto_ibu']));?>
" width="100">
				<?php }?>
			</td>
			<td>
				<a href="<?php echo site_url("ibu/update/".((string)$_smarty_tpl->tpl_vars['ibu']->value['id_ibu']));?>
" class="btn btn-success" >
				<i class="fa fa-edit"></i> Update
				</a>

				<a href="<?php echo site_url("ibu/delete_action/".((string)$_smarty_tpl->tpl_vars['ibu']->value['id_ibu']));?>
" class="btn btn-danger btn-delete" onclick="return confirm('Anda yakin?')">
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

<br />
<a href="<?php echo site_url('ibu/download');?>
" class="btn btn-success"><i class="fas fa-download"></i> Download</a>
<!--end of body page-->

</div>

<?php echo '<script'; ?>
 type="text/javascript">
$('.btn-delete').click(function(event) {
    event.preventDefault();
    $.ajax({
        url: $(this).attr('href'),
        success: function(response) {
            $('#container-fluid').html(response);
        }
    });
    return false; // for good measure
});
<?php echo '</script'; ?>
>
<?php }
}
