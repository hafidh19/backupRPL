@extends('layouts.img')

@section('content')
<div class="container">
    <div class="row"></div>
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <div class="row"></div>
                    <div class="col-3">
                        <img src="../../storage/{{$post->gambar}}" alt="Gambar" height="300">
                        <h2 class="card-title text-center"><strong>{{$post->nbarang}}</strong></h2>
                        <h6 class="card-title text-center">Tersedia: {{$post->jbarang}} item</h6>
                        <h5 class="card-title text-center text-warning"><strong>Rp.{{$post->hbarang}} /hari</strong></h5>
                        <div class="text-center"><a href="#" class="btn btn-primary" ><strong>Sewa Sekarang</strong></a></div>
                    </div>
                    <div class="col-7">
                        <h6 class="card-title"><strong>Deskripsi Produk :</strong></h6>
                        <p>{{$post->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection