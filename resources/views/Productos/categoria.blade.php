<div class="card-deck">
	@foreach($productos as $producto)
	<div class="card text-white bg-success col-sm-4 pl-2 pt-3">
		<div class="card-header">
			<h5 class="card-title text-center">{{$producto->producto}}</h5>
		</div>
		<img src="{{asset('imagenes/cartuchos.jpg')}}" class="card-img-top" alt="cartuchos">
		<div class="card-body">
			<p class="card-text">{{$producto->descripcion}}</p>
			<ul>
				<li>MARCA: {{$producto->marca->marca}}</li>
			</ul>
			
		</div>
		<div class="card-footer">
			<a href="#" class="btn btn-primary btn-block btn-lg">$ {{$producto->precio}}</a>
		</div>
	</div>
	@endforeach
</div>