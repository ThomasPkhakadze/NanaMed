<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('pages.index',['language' => app()->getLocale()]) }}" class="nav-link">Home</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info ">
            <nav>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview ">
                  <a href="#" class="nav-link ">
                    <p>
                      {{ Auth::user()->user_name }}
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item ">
                      <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
               
                
              </ul>
            </nav>
          </div>
          
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('*dashboard') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('about.index') }}" class="nav-link {{ Request::is('*about') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>about</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('categories.index') }}"
                class="nav-link {{ Request::is('*categories') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>categories</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('tags.index') }}" class="nav-link {{ Request::is('*tags') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>tags</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('faq.index') }}" class="nav-link {{ Request::is('*faq') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>faq</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('slider.index') }}" class="nav-link {{ Request::is('*slider') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>slider</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('contact-info.index') }}"
                class="nav-link {{ Request::is('*contact-info') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>contact-info</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('posts.index') }}" class="nav-link {{ Request::is('*posts') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>posts</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ route('services.index') }}" class="nav-link {{ Request::is('*services') ? "active" : ""}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>services</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          @yield('content')
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- Editor -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script>
    $(function () {
      $("#Table").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

    });
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>


</body>

</html>