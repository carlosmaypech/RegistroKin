<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('titulo')</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
       <!-- <link rel="icon" type="image/jpg" href="img/logo/{{Session::get('logo')}}"> -->
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <!-- <link rel="stylesheet" type="text/css" href="css/bienvenida.css"> -->
      <link rel="stylesheet" href="adminlte/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="adminlte/Ionicons/css/ionicons.min.css">
      <!-- <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css"> -->
      <!-- <link rel="stylesheet" href="css/toastr.css"> -->
      <link rel="stylesheet" href="adminlte/dist/css/skins/skin-red.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <!-- <link rel="stylesheet"  href="css/style.css"> -->
      <link rel="stylesheet" type="text/css" href="css/contenido.css">
      <meta name="token" id="token" value="{{ csrf_token() }}">
      <script type="text/javascript" src="js/vue.js"></script>
      <script type="text/javascript" src="js/vue-resource.js"></script>

  </head>
  <body>


    @yield('contenido')




    @stack('scripts')

   <!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/toastr.js"></script> -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
     <!--  <input type="hidden" name="route" value="{{url('/')}}"> -->


  </body>
</html>