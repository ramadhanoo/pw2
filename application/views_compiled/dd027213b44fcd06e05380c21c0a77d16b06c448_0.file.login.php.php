<?php
/* Smarty version 3.1.33, created on 2019-06-21 14:41:42
  from '/var/www/html/pw2/application/views/login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0c8a364371b2_45554201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd027213b44fcd06e05380c21c0a77d16b06c448' => 
    array (
      0 => '/var/www/html/pw2/application/views/login.php',
      1 => 1561102886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0c8a364371b2_45554201 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/fontawesome-free/css/all.min.css');?>
" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/css/sb-admin-2.min.css');?>
" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  
                  <form class="user" action="<?php echo site_url('login/login_action');?>
" method="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                      <?php echo form_error('username');?>

                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                      <?php echo form_error('password');?>

                    </div>

                    <button class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
<?php }
}
