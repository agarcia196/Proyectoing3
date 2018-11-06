@section('link_head')
<!-- CSS Files -->
<link href="{{ asset('css/material-dashboard.css') }}?v=2.1.0" rel="stylesheet" />
@endsection
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <h2 class="" >{{ $Encabezado }}</h2>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        <span class="notification">0</span>
                        <p class="d-lg-none d-md-block">
                            Some Actions
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <p class="dropdown-item" href="#">No hay notificaciones disponibles</p>              
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Perfil" href="{{ route('user.perfil',['name'=>'0']) }}">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            Perfil
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->