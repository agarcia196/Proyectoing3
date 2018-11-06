@extends('Capas.general')
@section('link_head')
<!-- CSS Files -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />
<!-- Fonts and Icons -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet">
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
@endsection
@section('registro')
<div class="image-container set-full-height" style="background-image: url('{{ asset('img/sky.jpg') }}')">
    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <!--      Wizard container        -->
                <div class="wizard-container">
                    <!--card-body-->
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-warning text-center">
                            <h2>Bienvenido a<br/></h2>                          
                            <h2>   <img class="mb-4" src="{{asset('img/favicon.png')}}" alt="" style="width:120px; height:100px;">Wolf Society</h2>
                        </div>                
                        <div class="card-body text-center">
                            <form class="form-signin">
                                <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-info">Entrar</button>
                                    <a type="button" class="btn btn-success" href="{{route('user.registro')}}">Registrarse</a>
                                </div>
                                <p class="mt-5 mb-3 text-muted">&copy;  <script>
              document.write(new Date().getFullYear())
            </script></p>
                            </form>
                        </div>
                    </div><!--card-body-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!--   Core JS Files   -->

<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('js/paper-bootstrap-wizard.js')}}"type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>
@endsection