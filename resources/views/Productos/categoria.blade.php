<div class="col-sm-12">
			@if(Session::has('message'))
			<div class="alert alert-{{Session::get('class')}} alert-dismissable">
			<button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('message')}}</div>
			@endif
</div>
@foreach($productos as $producto)
<div class="col-sm-4 row mb-1 tarjetas ml-1">
	<div class="card text-white bg-info">
		<div class="card-header">
			<h6 class="card-title text-center">{{$producto->producto}}</h6>
		</div>
		<img src="{{asset('imagenes/')}}/{{$producto->imagen}}" class="card-img img-fluid p-1" alt="cartuchos">
		<div class="card-body">
			<p class="card-text text-title">{{$producto->descripcion}}</p>
			<ul>
				<li>Marca: {{$producto->marca->marca}}</li>
				<li>Unidad: {{$producto->unidad->unidad}}</li>
			</ul>
			
		</div>
		<div class="card-footer">
			<a href="#" class="btn btn-primary btn-block btn-lg">$ {{$producto->precio}}</a>
		</div>
	</div>
</div>
<hr>
@endforeach
<style type="text/css">
	.tarjetas:hover{
		border: 3px solid yellow;
	}
</style>
<script type="text/javascript">
	$('.tarjetas').on('click', function() {
		//Code
});
</script>