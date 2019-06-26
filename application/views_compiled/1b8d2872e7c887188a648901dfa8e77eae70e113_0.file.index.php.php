<?php
/* Smarty version 3.1.33, created on 2019-06-26 07:51:43
  from '/var/www/html/pw2/application/views/template/index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d12c19f4b1fa7_39325835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8d2872e7c887188a648901dfa8e77eae70e113' => 
    array (
      0 => '/var/www/html/pw2/application/views/template/index.php',
      1 => 1561510080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/sidebar.php' => 1,
    'file:template/header.php' => 1,
    'file:template/footer.php' => 1,
  ),
),false)) {
function content_5d12c19f4b1fa7_39325835 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemrograman Web 2</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/fontawesome-free/css/all.min.css');?>
" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url('asset/css/sb-admin-2.min.css');?>
" rel="stylesheet">
  <link href="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css');?>
" rel="stylesheet">

  <!-- Bootstrap core JavaScript-->
  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/vendor/jquery/jquery.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js');?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/vendor/datatables/jquery.dataTables.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/vendor/datatables/dataTables.bootstrap4.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/js/demo/datatables-demo.js');?>
"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo base_url('asset/js/sb-admin-2.min.js');?>
"><?php echo '</script'; ?>
>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $_smarty_tpl->_subTemplateRender("file:template/sidebar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $_smarty_tpl->_subTemplateRender("file:template/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['body_page']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $_smarty_tpl->_subTemplateRender("file:template/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

</body>

</html>
<?php }
}
