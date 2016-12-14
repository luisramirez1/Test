@extends('principal')

@section('contenido')

<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Tus 3 Mejores Areas  <a href="{{url('/generarPDF')}}/{{Auth::user()->id}}/{{$canti}}" style="margin-left: 15px; color: #D60A0A;"><span class="glyphicon glyphicon-download-alt">PDF</span></a></h1>
				<div class="content-top1" >
					@foreach($areas as $a)
						<div class="col-md-6">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="{{ url('/areas') }}/{{$a->id}}">
									<img class="img-responsive" src="{{asset("images/areas/$a->imagen")}}" alt="" />
								</a>
								<h3><a href="{{ url('/areas') }}/{{$a->id}}">{{$a->nombre}}</a></h3>
								<div class="price">
									<h5 class="item_price" style="text-align: center; color: #00a6d6; font-weight: bold;">{{$a->calificacion}}%</h5>
								<div class="clearfix"> </div>
							</div>
							</div>
						</div>
					@endforeach 
				</div> 
		</div>
	</div>
</div> <br>

@stop