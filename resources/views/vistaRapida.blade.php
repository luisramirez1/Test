@extends('principal')

@section('contenido')

<div class="single">

<div class="container">
<div class="col-md-12">
	<div class="col-md-5 grid">		
		<div class="flexslider">
			<div class="thumb-image">
				@if($usuarios->imagen == null)
					<img class="img-responsive" src="{{asset("images/usuarios/user.png")}}">
				@else
					<img class="img-responsive" src="{{asset("images/usuarios/$usuarios->imagen")}}">
				@endif
			</div>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
	<div class="single-para simpleCart_shelfItem">
		<h1 style="font-size: 2.3em;">{{$usuarios->name}}</h1> <br>
		<p style="margin-top: -30px;">{{$usuarios->email}}</p> <br>
		<p style="margin-top: -30px;">{{$usuarios->tel}}</p>

		<div class="available">
			<h6 style="color: #00a6d6;">Calificaciones</h6>			
		</div>
		@foreach($areas as $a)
		<p style="margin-top: -30px;">{{$a->nombre}}: {{$a->calificacion}}%</p> <br>
		@endforeach
	</div>
</div>
</div>
</div>
</div>
@stop