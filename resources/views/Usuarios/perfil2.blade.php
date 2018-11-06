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
            <div class="col-md-7 order-md-1 order-sm-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card card-nav-tabs">
                            <h4 class="card-header card-header-primary">Publicaci&oacuten</h4>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Dime algo</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary ">Publicar</button>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                    @for($i=0;$i<count($nombre);$i++)
                                                      <div class="row">
                    <div class="card card-stats border border-success">
                        <div class="card-header card-header-info text-left card-header-icon">
                            <a href="{{ route('user.perfil',['name'=>$i])}}">
                                <div style="margin-top: -20px; margin-right: 15px;
                                            float: left;">
                                    <img class="rounded img-fluid" style="width: 100px; height: 100px;" src="{{ asset('img/faces/'.$nombre[$i].'.jpg') }}">
                                </div>           
                                <h3 class="card-title text-capitalize">{{ e($nombre[$i]) }}</h3></a>
                            <p class="card-category">Estudiante</p>
                        </div>
                        <div class="card-body text-justify">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>  
                        </div>
                        <form>
                            <div class="card-body"> 
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Comentario" placeholder="Escribir comentario" aria-label="" aria-describedby="basic-addon1">
                                    <div class="input-group-append ">
                                        <button class="btn  btn-outline-light btn-sm" type="button"><i class="material-icons">
                                            send</i></button>
                                    </div>
                                </div>                       
                            </div>
                        </form>
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-info btn-sm " data-toggle="collapse" data-target="#id{{ $i }}">Ver m&aacutes</button>
                        </div>
                    </div>
                    <div id="id{{ $i }}" class="collapse">
                        @for($j=0;$j<count($nombre);$j++)
                                                          <div class="card card-stats border border-primary">
                        <div class="card-header card-header-primary card-header-icon text-left">

                            <a href="{{ route('user.perfil',['name'=>$j])}}">
                                <div style="margin-top: -20px; margin-right: 15px;
                                            float: left;">
                                    <img class="card-img-top img-fluid rounded" style="width: 70px; height: 70px;" src="{{ asset('img/faces/'.$nombre[$j].'.jpg') }}" alt="Usuario">
                                </div>
                                <h4 class="card-title text-capitalize">{{ e($nombre[$j]) }}</h4></a>
                            <p class="card-category">Administrador</p>
                            <p class="text-dark text-justify"></br>Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
            </div>
            @endfor
            <div class="text-center">
                <button type="button" class="btn btn-outline-primary btn-sm " data-toggle="collapse" data-target="#id{{ $i }}">Ver menos </button>
            </div> 
        </div>
    </div>
    @endfor
</div>
</div>
<div class="col-md-5 order-md-2 order-sm-1">
    <div class="container-fuild">
        <div class="row">
            <div class="card card-profile">
                <div class="card-avatar">
                    <img class="img" src="{{ asset('img/faces/'.$name.'.jpg') }}" />
                </div>
                <div class="card-body">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title text-capitalize">{{ e($name) }}</h4>
                    <label>Información Adicional</label> 
                    <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>                
            </div>
        </div>
        <div id="accordion" class="row">
            <div class="card">
                <div class="card-header card-header-primary" id="headingOne">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <h4 class="card-title">
                        <i class="material-icons">person</i><span>Informaci&oacuten personal</span>  
                        </h4></a>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">  
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nombre</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Apellido</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>                    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Usuario</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Correo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>                     
                            <div class="row">                      
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pa&iacutes</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ciudad</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dirección</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header card-header-primary" id="headingTwo">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="card-title"> 
                            <i class="material-icons">school</i><span>  Infomaci&oacuten acad&eacutemica</span>
                        </h4></a>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Universidad</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Carrera</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label">Inicio de estudio</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating" >Nivel</label>
                                        <input type="int" value="6" class="form-control">
                                    </div>
                                </div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@include('Capas.footer')
@endsection