<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{--TOKEN PARA CAMBIOS--}}
    <meta name="token" id="token" value="{{ csrf_token() }}">
    {{--META PARA RUTA DINAMICA--}}
    <meta name="route" id="route" value="{{url('/')}}">

  <title>@Yield('titulo')</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/semantic.min.css">
  
  <link rel="stylesheet" href="adminlte/css/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="adminlte/css/Ionicons/css/ionicons.min.css">
  
  <link rel="stylesheet" href="adminlte/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="adminlte/css/skins/skin-blue.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css"> -->
  <script type="text/javascript" src="js/vue.js"></script>
  <script type="text/javascript" src="js/vue-resource.js"></script>
  
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>Kin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Registro</b>Kin</span>
      <!-- <span class="logo-lg"><b>{{Session::get('rol')}}</span> -->
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
     <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>

            </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu" >

        <ul class="nav navbar-nav">


          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            
            
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            
            
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- <img src="img/usuarios/{{Session::get('foto')}}" class="user-image" alt="User Image"> -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Session::get('user')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">

                <!-- <img src="img/usuarios/{{Session::get('foto')}}" class="img-circle" alt="User Image"> -->

                <p>
                  {{Session::get('user')}} - {{Session::get('rol')}}
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              <!-- </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                 
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                 
                  <a href="{{url('logout')}}" class="btn btn-default btn-flat">Salir</a>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <br>
        </div>
        <div class="pull-left info">
           <p>{{Session::get('user')}}</p> -->
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i></a> -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <!-- <input type="text" name="q" class="form-control" placeholder="Search..."> -->
          <!-- <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span> -->
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links -->
        <li class=""><a href="{{url('/')}}"><i class="fa fa-home"></i><span>Inicio</span></a></li>
        <li class=""><a href="{{url('asistencia')}}"><i class="fa fa-check-square-o"></i><span>Asistencia del alumno</span></a></li>
        <li class=""><a href="{{url('alumno')}}"><i class="fa fa-odnoklassniki"></i><span>Alumnos</span></a></li>
        <li class=""><a href="{{url('prof')}}"><i class="fa fa-user-o"></i> <span>Maestros</span></a></li>
        <!-- <li><a href="#">Administrador</a></li> -->
        <li class=""><a href="{{url('tu')}}"><i class="fa fa-users"></i><span>Tutor de alumno</span></a></li>
        <li class=""><a href="{{url('desempenio')}}"><i class="fa fa-book"></i><span>Nota_desempenio</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('contenido')
      <br><br><br>
      <footer class="foo">
            <div class="conn">
              <!-- <img src="img/logo.png" class="img1" title="RegistroKin"> -->
                <p class="text text-center tamfoo">RegistroKin by CDM &copy; 2020</p>
                <div class="sociales">
                    <a class="icon-facebook"></a>
                    <a class="icon-twitter"></a>
                </div>
            </div>
        </footer>
 <!--      <h1>
        
        <small>Optional description</small>
      </h1> -->
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"></li>
      </ol> -->

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

<!-- REQUIRED JS SCRIPTS -->
@stack('scripts')
<!-- jQuery 3 -->
<script src="adminlte/jquery/dist/jquery.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="adminlte/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/js/adminlte.min.js"></script>
<script src="adminlte/js/demo.js"></script>
<script src="adminlte/fastclick/lib/fastclick.js"></script>
<!-- <script src="js/sweetalert2.min.js"></script> -->
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>
</html>