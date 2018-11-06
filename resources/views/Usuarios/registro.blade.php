@extends('Capas.general')
@section('link_head')
<!-- CSS Files -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />
<!-- Fonts and Icons -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="{{ asset('css/themify-icons.css')}}" rel="stylesheet">
@endsection
@section('registro')
<div class="image-container set-full-height" style="background-image: url('{{ asset('img/sky.jpg') }}')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                        <form action="" method="">
                            <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                            <div class="wizard-header text-center">
                                <a type='button' href="{{route('index')}}" class='btn btn-info  pull-left'>Login</a>                              
                                <h3 class="wizard-title">Crea tu perfil</h3>
                                <p class="category">Registrate grátis a nuestra plataforma.</p>
                            </div>

                            <div class="wizard-navigation">
                                <div class="progress-with-circle">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#about" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-user"></i>
                                            </div>
                                            Personal
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#account" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-settings"></i>
                                            </div>
                                            Estudio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#address" data-toggle="tab">
                                            <div class="icon-circle">
                                                <i class="ti-map"></i>
                                            </div>
                                            Complementario
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h5 class="info-text"> Ingrese sus datos personales.</h5>

                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label> Nombre<small> * </small></label>
                                                <input required name="firstname" type="text" class="form-control" placeholder="Alexis...">
                                            </div>
                                            <div class="form-group">
                                                <label>Usuario <small> *</small></label>
                                                <input required name="usuario" type="name" class="form-control" placeholder="A.Garcia...">
                                            </div>
                                            <div class="form-group">
                                                <label>Fecha de Nacimiento <small> *</small></label>
                                                <input required name="fecha" type="date" class="form-control" placeholder="Garcia...">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-0">
                                            <div class="form-group">
                                                <label>Apellido <small> *</small></label>
                                                <input required name="lastname" type="text" class="form-control" placeholder="Garcia...">
                                            </div>						
                                            <div class="form-group">
                                                <label>Correo <small> *</small></label>
                                                <input required name="email" type="email" class="form-control" placeholder="usuario123@correo.com...">
                                            </div>

                                            <div class="form-group">
                                                <label>Contraseña <small> *</small></label>
                                                <input required name="contraseña" type="password" class="form-control" placeholder="*********">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmar contraseña <small> *</small></label>
                                                <input required name="confirmar_contraseña" type="password" class="form-control" placeholder="*********" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">

                                    <h5 class="info-text"> Complete la siguiente información sobre sus estudios </h5>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label> Universidad<small> *</small></label>
                                                <input required name="universidad" type="text" class="form-control" placeholder="Universidad EIA...">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-0">
                                            <div class="form-group">
                                                <label> Carrera<small> *</small></label>
                                                <input required name="carrera" type="text" class="form-control" placeholder="Ingenieria de Sistemas...">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group">
                                                <label> Nivel<small> *</small></label>
                                                <input required name="nivel" type="number" class="form-control" placeholder="Semestre cursando ..." min="1" max="10" path="note">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-0">
                                            <div class="form-group">
                                                <label> Inicio<small> *</small></label>
                                                <input required name="inicio" type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="address">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="info-text"> Por último, comparte la información que quieras con nosotros. </h5>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="{{asset('img/default-avatar.jpg')}}" class="picture-src" id="wizardPicturePreview" title="" />
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Escoger foto de perfil</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-0">
                                            <div class="form-group">
                                                <label>Cursos realizados:</label>
                                                <textarea class="form-control" placeholder="¿Qué conocimientos tienes?" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="form-group">
                                                <label>Información adicional:</label>
                                                <textarea class="form-control" placeholder="Cuéntanos algo sobre ti..." rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Siguiente' />
                                    <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Terminar' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->
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