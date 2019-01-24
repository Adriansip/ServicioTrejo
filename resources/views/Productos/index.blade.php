@extends('layouts.app')
@section('content')
<div class="container alert alert-info">
	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" categoria="1">
				<img src="{{asset('imagenes/consumibles2.png')}}" class="d-block w-100 img-fluid" alt="Primer Slide" categoria="1">
			</div>
			<div class="carousel-item" categoria="2">
				<img src="{{asset('imagenes/impresoras.png')}}" class="d-block w-100 img-fluid" alt="Segundo Slide">
			</div>
			<div class="carousel-item" categoria="3">
				<img src="{{asset('imagenes/tercerslider.png')}}" class="d-block w-100 img-fluid" alt="Tercer Slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<hr>
	<div class="row">		
		<div class="col-sm-4">
			<label for="Marca">Marca</label>
			<select name="marca" class="form-control" id="marca">
				<option value="0">Todas...</option>
				@foreach($marcas as $marca)
				<option value="{{$marca->idMarca}}">{{$marca->marca}}</option>
				@endforeach
			</select>
		</div>
		<div class="col-sm-4">
			<label for="Precio">Precio</label>
			<input type="number" step="any" class="form-control" placeholder="$$$ Maximo rango de precio" id="precio">
		</div>
		<div class="col-sm-4 mb-2">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" placeholder="Palabra relevante" aria-describedby="basic-addon1" id="datoBusqueda">
		</div>
		<div class="col-sm-12">
			<button class="btn btn-success btn-lg btn-block" id="buscador">Buscar</button>
		</div>
	</div>
	<div class="row pt-2" id="categorias">
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('js/productos/carrusel.js')}}"></script>
@endsection