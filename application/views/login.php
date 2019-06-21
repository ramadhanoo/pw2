<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{base_url('asset/vendor/fontawesome-free/css/all.min.css')}" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="{base_url('asset/css/sb-admin-2.min.css')}" rel="stylesheet">

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
                  
                  <form class="user" action="{site_url('login/login_action')}" method="post">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                      {form_error('username')}
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                      {form_error('password')}
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
