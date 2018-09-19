@extends('Capas.general')
@section('link_head')
<link href="{{ asset('css/paper-bootstrap-wizard.css') }}" rel="stylesheet" />
<style type="text/css">
	.logo-container{
    left: 50px;
    position: absolute;
    top: 20px;
     z-index: 3;
}
.logo-container .logo{
    overflow: hidden;
    border-radius: 50%;
    border: 1px solid #333333;
    width: 60px;
    float: left;
}
.logo-container .brand{
    font-size: 18px;
    color: #FFFFFF;
    line-height: 20px;
    float: left;
    margin-left: 10px;
    margin-top: 10px;
    width: 60px
}	
</style>
<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a>

		<!--  Made With Paper Kit  -->
		<a href="http://demos.creative-tim.com/paper-kit?ref=paper-bootstrap-wizard" class="made-with-pk">
			<div class="brand">PK</div>
			<div class="made-with">Made with <strong>Paper Kit</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Create your profile</h3>
									<p class="category">This information will let us know more about you.</p>
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
												About
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Work
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Address
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Please tell us more about yourself.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="Andrew...">
												</div>
												<div class="form-group">
													<label>Last Name <small>(required)</small></label>
													<input name="lastname" type="text" class="form-control" placeholder="Smith...">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h5 class="info-text"> What are you doing? (checkboxes) </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-paint-roller"></i>
															<p>Design</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Code">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-pencil-alt"></i>
															<p>Code</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-star"></i>
															<p>Develop</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Are you living in a nice area? </h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Street Name</label>
		                                            <input type="text" class="form-control" placeholder="5h Avenue">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Street Number</label>
		                                            <input type="text" class="form-control" placeholder="242">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>City</label>
		                                            <input type="text" class="form-control" placeholder="New York...">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                        <div class="form-group">
		                                            <label>Country</label><br>
		                                            <select name="country" class="form-control">
		                                                <option value="Afghanistan"> Afghanistan </option>
		                                                <option value="Albania"> Albania </option>
		                                                <option value="Algeria"> Algeria </option>
		                                                <option value="American Samoa"> American Samoa </option>
		                                                <option value="Andorra"> Andorra </option>
		                                                <option value="Angola"> Angola </option>
		                                                <option value="Anguilla"> Anguilla </option>
		                                                <option value="Antarctica"> Antarctica </option>
		                                                <option value="...">...</option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div>
	    </div>
	</div>
@endsection
@section('script')

	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
	
	<script src="{{ asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{ asset('js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
@endsection