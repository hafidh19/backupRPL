@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Transaksi
            </div>
            <div class="card-body">
        <form class="" action="{{ route('T.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Pemilik Barang</label>
                <select name="id_pemilik" id="" class="form-control" readonly=read-only>
                    @foreach ($users as $user)
                        <option value="{{ $user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Peminjam</label>
                <select name="id_peminjam" id="" class="form-control" readonly=read-only>
                <option value="{{ Auth::user()->id }}">{{Auth::user()->username}}</option>
                </select>
            </div>
            
                    
              <div class="form-group">
                    <label for="">Harga Sewa Barang</label>
                    <input type="number" name="hbarang" class="form-control has-feedback{{ $errors->has('hbarang') ? ' is-invalid' : '' }}"  value="{{ $post->hbarang }}" required autofocus readonly=read-only>
                    <div class="col-md-6">
                        @if ($errors->has('hbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('hbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Jumlah Barang Yang Akan Disewa</label>
                    <input type="number" name="jbarang" min="1" max="{{$post->jbarang}}"class="form-control{{ $errors->has('jbarang') ? ' is-invalid' : '' }}"   required autofocus>
                    <div class="col-md-6">
                        @if ($errors->has('jbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('jbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control" readonly=read-only>
                <option value="{{ "2" }}">{{ "Request Meminjam" }}</option>
                </select>
            </div>      

                <div class="form-group">
                <button type="submit"  class="btn btn-outline-success" value="save">Submit</button>
                </div>
                 
            </div></form>    
        </div>    
    </div>
             
    
@endsection
