@extends('principal')

@section('banner')
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="{{asset("images/8.png")}}" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="{{asset("images/1.png")}}" alt="">
	       			 </li>
			 		 <li>
	          			<img src="{{asset("images/2.PNG")}}" alt="">   
	       			 </li>
					 <li>
	          			<img src="{{asset("images/3.png")}}" alt="">
	        		</li>
	        		<li>
	          			<img src="{{asset("images/4.png")}}" alt="">
	        		</li>
	        		<li>
	          			<img src="{{asset("images/5.png")}}" alt="">
	        		</li>
	        		<li>
	          			<img src="{{asset("images/6.png")}}" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="{{asset("images/7.png")}}" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
@stop

@section('contenido')

<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Areas</h1>
				<div class="content-top1" >
					@foreach($areas as $a)
						<div class="col-md-6">
							<div class="col-md1 simpleCart_shelfItem">
								<a href="{{ url('/areas') }}/{{$a->id}}">
									<img class="img-responsive" src="{{asset("images/areas/$a->imagen")}}" alt="" />
								</a>
								<h3><a href="{{ url('/areas') }}/{{$a->id}}">{{$a->nombre}}</a></h3>
							</div>
						</div>
					@endforeach 
				</div> 
		</div>
	</div>
</div> <br>

@stop

@section('footer')
<div class="container">
	<div class="footer-top">
		<div class="col-md-12 top-footer">
			<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyChLYePB8JQlxF1bl9y5PInW7QZttVUsRY&q=Tecnologico+culiacan+culiacan,sinaloa+mexico"></iframe>
		</div>
		<div class="clearfix"> </div>	
	</div>	
</div>
@stop