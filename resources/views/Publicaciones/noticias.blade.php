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
                <div class="row">
                    <div class="card card-nav-tabs">
                        <h4 class="card-header card-header-primary">Publicaci&oacuten</h4>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Cu&eacutentanos algo</label>
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
                            <h3 class="card-title">{{ e($nombre[$i]) }}</h3></a>
                        <p class="card-category">Estudiante</p>
                    </div>
                    <div class="card-body text-left">
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
                            <h4 class="card-title">{{ e($nombre[$j]) }}</h4></a>
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
<div class="col-lg-5 col-md-6 col-sm-12">
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-info">Sugerencias</h4></br>
    <div class="card-body ">
        @for($k=0;$k<count($nombre);$k++)
                                          <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <a href="{{ route('user.perfil',['name'=> $k])}}">
                <div class="card-icon">
                    <img class="card-img-top rounded" style="width: 70px; height: 70px;" src="{{ asset('img/faces/'.$nombre[$k].'.jpg') }}" alt="Usuario">  
                </div>                  
                <h4 class="card-title">{{ e($nombre[$k]) }}</h4></a> </div><div class="col-lg-6 col-md-6 col-sm-12 ">
        </br> <a href="#" class="btn btn-primary">Follow</a> </div> 
</div>
<hr />
@endfor
</div>
</div>
</div> 
</div>           
</div>
@include('Capas.footer')
@endsection