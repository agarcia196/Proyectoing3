@extends('Capas.general')
@section('link_head')
<style type="text/css">

</style>
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                		<p>palabra</p>
                	</div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="tim-typo">
                        <h2><i class="material-icons">person</i> Login</h2>
                    </div>
                     <div class="card-body">
                    <form>
                     <div class="row">
                      <div class="form-group">
                          <label class="bmd-label-floating"> Email address</label>
                          <input type="email" class="form-control">
                        </div>                         
                      </div>
                      <div class="row">
                        <div class="form-group">
                                <label class="bmd-label-floating"> Username</label>
                                <input type="text" class="form-control">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    </form>                     
                    </div> 
                    </div>              
                
          </div>
    </div>   
@endsection