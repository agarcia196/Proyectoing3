<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png') }}">
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        @yield('link_head')
    </head>
    <body>
        @yield('registro') 
        @if($title!='Registro')
        <div class="wrapper">
            @yield('menu')
            <div class="main-panel">    
                @yield('navbar')
                @yield('content')
            </div>
        </div>
        @endif
    </body>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-dashboard.min.js') }}?v=2.1.0" type="text/javascript"></script>
    @yield('script')
</html>