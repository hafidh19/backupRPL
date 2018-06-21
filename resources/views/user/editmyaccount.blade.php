@extends('layouts.img')
@section('content')
<style>
body{margin-top:20px;}	
</style>


<div class="container bootstrap snippet">
<form class="form-horizontal" action="{{ route('user.updatemyaccount') }}" role="form" method="post">
         
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
          <img src="//placehold.it/200" class="avatar img-circle" alt="avatar">
        
          <div class="form-group">
                    <div class="input-field">
                        <input type="file" name="gambar" class="validate{{ $errors->has('gambar') ? ' is-invalid' : '' }}"  value="{{ old('gambar') }}" required autofocus >
                    </div>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Data dibawah <strong>wajib</strong> diisi.
        </div>
        <h3>Profil</h3>
        
        <form class="form-horizontal" action="{{ route('user.updatemyaccount') }}" role="form" method="post">
           {{ csrf_field() }}   
          <div class="form-group">
            <label class="col-lg-3 control-label">UserName</label>  
            <div class="col-lg-8">
              <input class="form-control" name="username" type="text" value="{{AUth::user()->username}}" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">First Name</label>
            <div class="col-lg-8">
              <input class="form-control" name="firstname" type="text" value="{{AUth::user()->firstname}}" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-8">
              <input class="form-control" name="lastname" type="text" value="{{AUth::user()->lastname}}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="{{AUth::user()->email}}" readonly style="background-color:#efefef">
            </div>
          </div>
          
       
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat:</label>
            <div class="col-lg-8">
              <input class="form-control" name="alamat" type="text" value="{{AUth::user()->alamat }}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Negara:</label>
            <div class="col-lg-8">
              <input class="form-control" name="negara" type="text" value="{{AUth::user()->country }}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.HP:</label>
            <div class="col-lg-8">
              <input class="form-control" name="no_hp" type="text" value="{{AUth::user()->phoneNumber }}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.Rekening:</label>
            <div class="col-lg-8">
              <input class="form-control" name="no_rek" type="text" value="{{AUth::user()->rek }}">
            </div>
          </div>
          <input type="submit"  class="btn btn-primary" value="Save">

        </form>
      </div>
  </div>
</div>
<hr>
@endsection