@extends('Capas.general')
@section('menu')
@include('Capas.menu')
@endsection
@section('navbar')
@include('Capas.navbar')
@endsection
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-nav-tabs card-plain">
                    <div class="card-header card-header-primary ">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#persona" data-toggle="tab">Personas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#proyecto" data-toggle="tab">Proyectos</a>
                            </li>
                            <li class="nav-item justify-content-end">
                                <form class="form-inline">
                                    <div class="form-group has-white">
                                        <input type="text" class="form-control" placeholder="Buscar">
                                    </div>
                                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini btn-round">
                                        <i class="material-icons">search</i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Filtrar por</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Estudiante
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Profesor
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Ing. Sistemas y Computaci&oacute;n 
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Ing. Mecanica 
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Otro: </label>
                                    <input type="email" class="form-control" id="exampleInput1">
                                    <span class="bmd-help">Ingresa una palabra clave.</span>
                                </div>
                            </li>
                            <li>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Filtrar</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @for($i=0;$i<count($nombre);$i++)
                                                      <div class="col-md-6 col-md-offset-6">
                    <div class="card card-stats border border-primary text-capitalize">
                        <div class="card-header card-header-info text-left card-header-icon">
                            <a href="{{ route('user.perfil',['name'=>$i])}}">
                                <div style="margin-top: -20px; margin-right: 15px;
                                            float: left;">
                                    <img class="rounded-circle img-fluid" style="max-width: 100px; max-height: 100px;" src="{{ asset('img/faces/'.$nombre[$i].'.jpg') }}">
                                </div>           
                                <h3 class="card-title">{{ e($nombre[$i]) }}</h3></a>
                            <p class="card-category">Estudiante</p>
                        </div>
                        <div class="card-body">
                            <button class="btn text-capitalize btn-primary btn-sm">Seguir</button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>  
        </div>
    </div>
</div>
</div>
@include('Capas.footer')
@endsection