
@extends('layouts.img')
@section('content')
<style>
body{margin-top:20px;}	
</style>

<form class="form-horizontal" action="{{ route('user.storemyaccount') }}" role="form" method="POST"  enctype="multipart/form-data">
           {{ csrf_field() }}
        
<div class="container bootstrap snippet">
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
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Username</label>
            <div class="col-lg-8">
              <input class="form-control" name="username" type="text" value="{{AUth::user()->username}}" >
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
              <input class="form-control" name="alamat" type="text" value="{{AUth::user()->country }}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.HP:</label>
            <div class="col-lg-8">
              <input class="form-control" name="hp" type="text" value="{{AUth::user()->phoneNumber }}" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.Rekening:</label>
            <div class="col-lg-8">
              <input class="form-control" name="rek" type="text" value="{{AUth::user()->rek }}">
            </div>
          </div>
         
          <input type="submit"  class="btn btn-primary" value="Edit">
        </form>
      </div>
  </div>
</div>
<hr>
@endsection