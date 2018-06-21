@extends('layouts.img')

@section('content')
    <div class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2">
			   <div class="panel panel-default">
					<div class="card" style="width:1100px;height:500px;">
						<div class="card-body">
							<div class="row">
                                <div class="col-3">
                                    <img src="../../storage/{{$post->gambar}}" alt="Gambar" height="300">
                                    <h2 class="card-title text-center"><strong>{{$post->nbarang}}</strong></h2>
                                    <h6 class="card-title text-center">Tersedia: {{$post->jbarang}} item</h6>
                                    <h5 class="card-title text-center text-warning"><strong>Rp.{{$post->hbarang}} /hari</strong></h5>
                                    <div class="text-center"><button type="submit" class="btn btn-outline-success" href="#">Submit</button>
                </div></div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title"><strong>Deskripsi Produk :</strong></h6>
                                    <p>{{$post->deskripsi}}</p>
                                </div>
                            </row>
						</div>
					</div>
				</div>
               
            </div>
        
        </div>
    </div>
@endsection