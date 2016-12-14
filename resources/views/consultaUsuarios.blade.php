@extends('principal')

@section('contenido')

<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Usuarios</h1>
				<div class="content-top1" >
					@foreach($usuarios as $a)
						<div class="col-md-6">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="{{ url('/vistaRapida') }}/{{$a->id}}">
									@if($a->imagen == null)
									<img style="width: 40%;" class="img-responsive" src="{{asset("images/usuarios/user.png")}}" alt="" />
									@else
									<img style="width: 40%;" class="img-responsive" src="{{asset("images/usuarios/$a->imagen")}}" alt="" />
									@endif
								</a>
								<h3><a href="{{ url('/vistaRapida') }}/{{$a->id}}">{{$a->name}}</a></h3>
							</div>
						</div>
					@endforeach 
				</div> 
		</div>
	</div>
</div> <br>

@stop