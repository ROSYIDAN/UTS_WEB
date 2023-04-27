<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin {{ isset($title)?'| '.$title:'' }}</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/jqvmap/jqvmap.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("admin_assets/dist/css/adminlte.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/daterangepicker/daterangepicker.css") }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset("admin_assets/plugins/summernote/summernote-bs4.min.css") }}">
  <link rel="stylesheet" href="app.css">
  @yield('head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset("admin_assets/dist/img/AdminLTELogo.png") }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('users.index') }}" class="nav-link">Users</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('portofolios.index') }}" class="nav-link">Portofolios</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user-circle fa-lg"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset("admin_assets/dist/img/user1-128x128.jpg") }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item">
           Logout
          </a>

    </ul>
  </nav>
  <!-- /.navbar -->

  @include('sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-3">
    <!-- /.content-header -->
    @yield('content-header')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="height:65%;">
        @yield('body')
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer mt-5">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('sweetalert::alert')

<!-- jQuery -->
<script src="{{ asset("admin_assets/plugins/jquery/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("admin_assets/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset("admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset("admin_assets/plugins/sparklines/sparkline.js") }}"></script>
<!-- JQVMap -->
<script src="{{ asset("admin_assets/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("admin_assets/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ asset("admin_assets/plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset("admin_assets/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset("admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<!-- Summernote -->
<script src="{{ asset("admin_assets/plugins/summernote/summernote-bs4.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("admin_assets/dist/js/adminlte.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("admin_assets/dist/js/demo.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("admin_assets/dist/js/pages/dashboard.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('scripts')

</body>
</html>
