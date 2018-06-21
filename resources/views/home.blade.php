@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
	<div class="card-header">
		Kategori
	</div>
	<div class="card-body">
	<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<img src="img/furnitur.png" class="card-img-top"  alt="Kursi">
					<div class="card-body">
						<h5 class="card-title text-center">Furniture</h5>
						<p class="card-text text-center">Cari meja-kursi-lemari atau furniture lainnya untuk keperluan acaramu? cari disini.</p>
						<div class="text-center"><a href="{{ route('furniture')}}" class="btn btn-outline-success" role="button">Selengkapnya</a></div>
					
							
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="card">
					<img class="card-img-top" src="img/kostum.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-center">Kostum</h5>
						<p class="card-text text-center">Cari kostum-topeng-aksesoris atau pernak-pernik bagus untuk acara kalian? cari disini.</p>
						
						<div class="text-center"><a href="{{ route ('kostum')}}" class="btn btn-outline-success" role="button">Selengkapnya</a></div>
					</div>
				</div>
			</div>
			

			<div class="col-sm-3">
				<div class="card">
					<img class="card-img-top" src="img/musik.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-center">Musik</h5>
						<p class="card-text text-center">Cari alat musik seperti gitar, biola, dan alat musik lainnya untuk acara kalian? cari disini.</p>
						
						<div class="text-center"><a href="{{ route ('musik')}} " class="btn btn-outline-success" role="button">Selengkapnya</a></div>
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="card">
					<img class="card-img-top" src="img/elektronik.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-center">Elektronik</h5>
						<p class="card-text text-center">Cari alat elektronik seperti sound system, speaker, dll untuk acara kalian? cari disini.</p>
						
						<div class="text-center"><a href="{{ route ('elektronik')}} " class="btn btn-outline-success" role="button">Selengkapnya</a></div>
					</div>
				</div>
			</div>

	<br>
			

		</div>
		<br></br>
		<div class="row">
		<div class="col-sm-3">
				<div class="card">
					<img class="card-img-top" src="img/tenda.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title text-center">Stand/Tenda</h5>
						<p class="card-text text-center">Cari Tenda-Panggung-Terpal atau keperluan lapangan lainnya, bisa kamu cari disini.</p>
						
						<div class="text-center"><a href="{{ route ('tenda')}} " class="btn btn-outline-success" role="button">Selengkapnya</a></div>
					</div>
				</div>
			</div>

		</div>
			
			
		</div>
	</div>
	</div>
</div>
@endsection