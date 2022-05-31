<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админ-панель-@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">


<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!--<img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
    <img src="public/admin/dist/ing/credit/AdminLTELogo.png" alt="admin">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Админ-панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          
        </div>
      </div>
      
    
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
        
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                 <!-- Logout-->
               

            <a href="{{ route('homeAdmin')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Главная
                </p>
            </a>
          </li>
          
         <a href="#">
          <li class="nav-item">
          <a href="{{ route('customers.index')}}" class="nav-link">
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                Все пользователи
                <i class="right fas fa-angle-left"></i>
              </p>
           
            </a>
        </a>
    
<!--
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                
                  <p>Все статьи</p>
                </a>
              </li>
              <li class="nav-item">
              
                 
                  <p>Добавить статью</p>
                </a>
              </li>
          
            </ul>
-->
          </li>

          <!-- блок категории -->
          <li class="nav-item">
          <a href="{{ route('prices.index')}}" class="nav-link">
             <i class="nav-icon fas fa-align-left"></i>
              <p>
                Прайс-лист
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <!--
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('prices.index')}}" class="nav-link">
                
                  <p>Прайс Онлайн</p>
                </a>
              </li>
              <li class="nav-item">
                
                 
                  <p>Прайс Оффлайн</p>
                </a>
              </li>
          
            </ul>
-->
          </li>
         
          <!-- Отзывы редактирование -->
          <li class="nav-item">
            <a href="{{ route('feedbacks.index')}}" class="nav-link">
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                Отзывы
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           </li>
           
           <li class="nav-item">
            <a href="{{ route('themes.index') }}" class="nav-link">
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                Темы
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           </li>
           
           <li class="nav-item">
            <a href="{{ route('aboutUs.index') }}" class="nav-link">
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                О нас
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           </li>

           <li class="nav-item">
            <a href="{{ route('whatGot.index')}}" class="nav-link">
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                Что Вы получаете
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           </li>

           <li class="nav-item">
           
             <i class="nav-icon far fa-newspaper"></i>
              <p>
                Карты
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
      @yield('content')
   </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdn.tiny.cloud/1/psj48pjyotkt5urbzb96t4mw0kmwny1bxvkppue5hcfhwk3c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<script src="C:\xampp\htdocs\englishMarathon\resources\js\app.js">js</script>

</body>
</html>
