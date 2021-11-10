<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  <!-- header -->
  @include('layouts.header')
  <!-- /header -->

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <span class="brand-text font-weight-light">PruebaGSC</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Productos
                    <i class="right fas fa-angle-left"></i>
                  </p>
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
                <h1 class="m-0"><strong class="text-light"> Prueba Global System Company </strong></h1>
              </div><!-- /.col -->
              <div class="col-sm-6 text-right">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel pb-3 row">
                  <div class="col-md-6"></div>
                  <div class="info col-md-3">
                    <h4><strong class="text-light">ANA MARIA</strong></h4>
                  </div>
                  <div class="col-md-3">
                    <img src="{{asset('dist/img/user2-160x160.png')}}" class="direct-chat-img" alt="User Image">
                  </div>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              @yield('content')
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      @include('layouts.footer')
      <!-- / Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('layouts.scripts')
  </body>
</html>
