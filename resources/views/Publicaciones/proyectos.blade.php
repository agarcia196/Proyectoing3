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
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-primary">Lista de proyectos</h4>
                    <div class="card-body">
                        <!--   <h4 class="card-title">No hay proyectos disponibles</h4>
<p class="card-text">No hay proyectos disponibles</p>
<a href="#" class="btn btn-primary">Go somewhere</a>-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Proyecto</th>
                                    <th>Miembros</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0;$i<count($proyectos);$i++)
                                                                     <tr>
                                <td >
                                    <a class="text-dark" href="{{ route('proyecto',['name'=>$i])}}">
                                        <img style=" width: 100px; height: 100px;"  src="{{ asset('img/proyecto/'.$proyectos[$i].'.jpg') }}" class="rounded-circle float-left img-fluid" alt="logo {{$proyectos[$i] }}">
                                        <p>{{ $proyectos[$i] }}</p>
                                    </a>
                                </td>
                                <td>{{ $i }}</td>
                                <td class="td-actions text-center">            	
                                    <a title="Ver proyecto" type="button" rel="tooltip" data-placement="bottom" class="btn btn-info" href="{{ route('proyecto',['name'=>$i])}}">
                                        <i class="material-icons">group</i>
                                    </a>
                                    <button title="Eliminar proyecto" rel="tooltip" type="button"  data-placement="bottom" class="btn btn-danger" >
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12">
        <div class="card card-nav-tabs">
            <h4 class="card-header card-header-info">Sugerencias de proyectos</h4>
            <div class="card-body">
                <div class="row">
                @for($i=0;$i<count($proyectos);$i++) 
                                                     	
                <div class="col-lg-6 col-md-6 col-sm-12 text-center col-md-offset-6 ">
                    <a class="text-dark  " href="{{ route('proyecto',['name'=>$i])}}">
                        <img class="rounded-circle align-self-center float-left img-fluid" style=" width: 70px; height: 70px;"  src="{{ asset('img/proyecto/'.$proyectos[$i].'.jpg') }}"  alt="logo {{$proyectos[$i] }}">
                        <p>{{ $proyectos[$i] }}</p>
                    </a>
                    <button type="button"  class="btn btn-primary btn-sm text-capitalize " >
                        unirse
                    </button>
                    </hr>
                </div>	
            @endfor
                  </div>
        </div>
    </div>
</div>			
</div>
</div>

</div>
</div>
@endsection