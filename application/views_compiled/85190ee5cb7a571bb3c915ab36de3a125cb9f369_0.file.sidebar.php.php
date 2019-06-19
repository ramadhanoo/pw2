<?php
/* Smarty version 3.1.33, created on 2019-06-19 08:25:13
  from '/var/www/html/pw2/application/views/template/sidebar.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d098ef9596ba0_17444478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85190ee5cb7a571bb3c915ab36de3a125cb9f369' => 
    array (
      0 => '/var/www/html/pw2/application/views/template/sidebar.php',
      1 => 1560906810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d098ef9596ba0_17444478 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
   </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('chart');?>
">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Grafik</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Latihan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-table"></i>
      <span>CRUD</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo site_url('ibu');?>
">Ibu</a>
        <a class="collapse-item" href="<?php echo site_url('anak');?>
">Anak</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('export');?>
">
      <i class="fas fa-fw fa-download"></i>
      <span>Export</span>
    </a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar --><?php }
}
