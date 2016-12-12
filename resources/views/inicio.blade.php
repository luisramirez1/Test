@extends('principal')

@section('banner')
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="images/8.png" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="{{asset("images/1.png")}}" alt="">
	       			 </li>
			 		 <li>
	          			<img src="{{asset("images/2.png")}}" alt="">   
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
		<img class="img-responsive" src="images/7.png" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
@stop

@section('contenido')
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Areas</h1>
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{asset("images/pi.png")}}" alt="" />
						</a>
						<h3><a href="single.html">Tops</a></h3>
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

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