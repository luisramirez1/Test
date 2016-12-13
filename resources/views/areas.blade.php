@extends('principal')

@section('contenido')

<div class="single">

<div class="container">
<div class="col-md-12">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			<div class="thumb-image"> <img class="img-responsive" src="{{asset("images/areas/$area->imagen")}}"> </div>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
	<div class="single-para simpleCart_shelfItem">
		<h1 style="font-size: 2.3em;">{{$area->nombre}}</h1>
		<div class="available">
			<h6 style="color: #00a6d6;">Profesiones</h6>			
		</div>
		<p style="margin-top: -30px;">{{$area->laboral}}</p>
		<div class="available">
			<h6 style="color: #00a6d6;">Universidades de la Localidad</h6>			
		</div>
		<p style="margin-top: -30px;">{{$area->escuelas}}</p>		
	</div>
</div>
</div>
</div>
</div>
			

@stop