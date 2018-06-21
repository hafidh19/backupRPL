@extends('layouts.img')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
    <div class="row">
        @foreach($posts as $post)
            @if($id != $post->user_id)
            <div class="col-sm-3">
                <div class="card text-center" style="width:250px;height:350px;">
                    <div class="card-body">
                        <img src="../storage/{{$post->gambar}}" alt="Gambar" height="128">
                        <h3 class="card-title"><strong>{{$post->nbarang}}</strong></h3>
                        <h5 class="card-title">Tersedia: {{$post->jbarang}} item</h5>
                        <h5 class="card-title text-warning"><strong>Rp.{{$post->hbarang}} /hari</strong></h5>
                        <a href="{{ route('post.showfurniture', $post) }}" class="btn btn-primary" >Selengkapnya</a>

                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection

