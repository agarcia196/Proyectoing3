<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ $title }}</title>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    .tim-typo {
  padding-left: 25%;
  margin-bottom: 40px;
  position: relative;
  width: 100%;
}

.tim-typo .tim-note {
  bottom: 5px;
  color: #c0c1c2;
  display: block;
  font-weight: 400;
  font-size: 13px;
  line-height: 15px;
  left: 0;
  margin-left: 20px;
  position: absolute;
  width: 260px;
}

/* offline-doc */

.offline-doc .navbar.navbar-transparent {
  padding-top: 25px;
  border-bottom: none;
}

.offline-doc .navbar.navbar-transparent .navbar-minimize {
  display: none;
}

.offline-doc .navbar.navbar-transparent .navbar-brand,
.offline-doc .navbar.navbar-transparent .collapse .navbar-nav .nav-link {
  color: #FFFFFF !important;
}

.offline-doc .footer {
  z-index: 3 !important;
}

.offline-doc .page-header .container {
  z-index: 3;
}

.offline-doc .page-header:after {
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 2;
}

#map {
  z-index: 2;
  height: calc(100vh - 70px);
  margin-top: 70px;
}</style>
     @yield('link_head')
  </head>
  <body>
    <header>
    @yield('navbar')
    </header>
    @yield('content')
   
  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  
  <!-- Chartist JS -->
  <script src="{{ asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-dashboard.min.js')}}" type="text/javascript"></script>
     @yield('script')
</html>