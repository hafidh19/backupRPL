@extends('layouts.img')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Edit Post
        </div>
        <div class="card-body">
        <form class="" action="{{ route('post.update',$post) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                 {{ method_field('PATCH') }}    
            <div class="form-group">
                <label for="">Username</label>
                <select name="user_id" id="" class="form-control">
                    @foreach ($users as $user)
                    {@if($user->id == Auth::User()->id)
                  <option value="{{ $user->id}}">{{$user->name}}</option>
                    @endif}
                    @endforeach
                </select>
            </div>
                
                <div class="form-group has-feedback{{ $errors->has('nbarang') ? ' is-invalid' : '' }}">
                    <label for="">Nama Barang</label>
                    <input type="text" class="form-control" name="nbarang" value="{{ $post->nbarang }}" required autofocus>
                    <div class="col-md-6">
                        @if ($errors->has('nbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group has-feedback{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}">
                    <label for="">Deskripsi Barang</label>
                    <textarea name="deskripsi" rows="5" class="form-control" required autofocus>{{ $post->deskripsi }}</textarea>
                    <div class="col-md-6">
                        @if ($errors->has('deskripsi'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Harga Sewa Barang</label>
                    <input type="number" name="hbarang" class="form-control has-feedback{{ $errors->has('hbarang') ? ' is-invalid' : '' }}"  value="{{ $post->hbarang }}" required autofocus>
                    <div class="col-md-6">
                        @if ($errors->has('hbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('hbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="number" name="jbarang" class="form-control{{ $errors->has('jbarang') ? ' is-invalid' : '' }}"  value="{{ $post->jbarang }}" required autofocus>
                    <div class="col-md-6">
                        @if ($errors->has('jbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('jbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- autofokusnya masih bermasalah -->
                <div class="form-group">
                    <div class="input-field">
                        <input type="file" name="gambar" class="validate{{ $errors->has('gambar') ? ' is-invalid' : '' }}"  value="{{ $post->gambar }}" required autofocus >
                    </div>
                </div>
                <div class="form-group">
                <button type="submit"  class="btn btn-outline-success" value="save">Submit</button>
                
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection