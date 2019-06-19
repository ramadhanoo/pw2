<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemrograman Web 2</title>

  <!-- Custom fonts for this template-->
  <link href="{base_url('asset/vendor/fontawesome-free/css/all.min.css')}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="{base_url('asset/css/sb-admin-2.min.css')}" rel="stylesheet">
  <link href="{base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css')}" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    {include file="theme/sidebar.php"}

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        {include file="theme/header.php"}

        <!-- Begin Page Content -->
        <div class="container-fluid">

          {include file="{$body_page}.php"}

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      {include file="theme/footer.php"}

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{base_url('asset/vendor/jquery/jquery.min.js')}"></script>
  <script src="{base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}"></script>
  <script src="{base_url('asset/js/sb-admin-2.min.js')}"></script>
  
</body>

</html>
