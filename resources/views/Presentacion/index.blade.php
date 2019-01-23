@extends('layouts.app')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/presentacion/presentacion.css')}}">
@endsection
@section('content')
<div class="row col-lg-12" id="primerContenedor">	
	<div class="offset-sm-1 col-sm-10">
		<div class="row">
			<div class="col-sm-4">
			<img src="{{asset('imagenes/principal-circulo.png')}}" 
			alt="servicio-trejo" class="img-fluid"  width="500%" height="130%" id="imagenPrincipal"></div>
			<div class="col-sm-8"><h1 id="titulo">SERVICIO TREJO</h1><p id="textoPrincipal">Se puede decir mucho de quienes somos.
<br>
 Somos una empresa capaz de realizar una producción rentable, sostenible y responsable, la cual se ha estado abriendo paso entre algunas otras grandes empresas.
Somos una empresa que está comprometida con nuestro trabajo y con nuestros clientes ademas que busca soluciones innovadoras para el buen desarrollo de nuestro trabajo.
<br>
Somos una empresa que le gusta contribuir con los objetivos que muchos de nuestros clientes y trabajadores se han trazado.
Somos quienes se encargan de facilitar el desarrollo de nuestros colaboradores, con el objetivo de tener un mejor sustento.</p></div>
		</div>
	</div>	
</div>
<div class="row col-lg-12" id="segundoContenedor">	
	<div class="offset-sm-1 col-sm-10 row">		
		<div class="col-sm-2 contenedorImagen">
			<img src="{{asset('imagenes/principal-circulo.png')}}"  width="100%" height="100%" class="img-fluid" alt="resumen" >
			<p class="text-center subtitulos" >Quienes Somos</p>			
		</div>
		<div class="offset-1 pl-10 col-sm-2 contenedorImagen">
			<img src="{{asset('imagenes/mision-circulo.png')}}"  width="100%" height="100%" class="img-fluid" alt="mision" id="imagen1">
			<p class="text-center subtitulos" >Mision</p>			
		</div>
		<div class="offset-1 pl-10 col-sm-2 contenedorImagen" value="2">
			<img src="{{asset('imagenes/vision-circulo.png')}}"  width="100%" height="100%" class="img-fluid" alt="vision">
			<p class="text-center subtitulos" >Vision</p>			
		</div>
		<div class="offset-1 pl-10 col-sm-2 contenedorImagen" value="3">
			<img src="{{asset('imagenes/objetivo.png')}}"  width="100%" height="100%" class="img-fluid" alt="objetivo">
			<p class="text-center subtitulos" >Objetivo</p>			
		</div>
	</div>	
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{asset('js/presentacion/presentacion.js')}}"></script>
@endsection