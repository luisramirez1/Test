<!DOCTYPE html>
<html>
<head>
<title>Test Vocacional</title>
<link href="{{asset("css/bootstrap.css")}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="{{asset("css/memenu.css")}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset("js/memenu.js")}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{asset("js/simpleCart.min.js")}}"> </script>
<!-- slide -->
<script src="{{asset("js/responsiveslides.min.js")}}"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="col-sm-4 world">
				
			</div>
			<div class="col-sm-4 logo">
					<a href="{{asset("/")}}" style="text-decoration: none;"><span style="color: #52d0c4; font-weight: bold; font-size: 2.3em; font-family: 'Roboto-Regular'; margin-left: -100px;">Test</span><br><span style="color: #424242; font-weight: bold; font-size: 1.5em; font-family: 'Roboto-Regular';">Vocacional</span></a>	
			</div>
		
			<div class="col-sm-4 header-left">	
					@if (Auth::guest())	
						<p class="log"><a href="{{ url('/login') }}"  >Iniciar</a>
						<span>or</span><a  href="{{ url('/register') }}"  >Registrar</a></p>
					@else
						<p class="log"><a href="{{ url('/logout') }}"
                               	onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Salir
                            </a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></p>
					@endif
					<div class="cart box_1">
						<a>
						<h3> <div class="">
							<span class=""></span></div>
							<img src="" alt=""/></h3>
						</a>
						@if (Auth::guest())
							<p><a class="simpleCart_empty" style="text-decoration: none;">Sesion No Iniciada</a></p>
						@else
							<p><a class="simpleCart_empty" style="text-decoration: none; font-size: 13px;">{{Auth::user()->name}}</a></p>
          				@endif

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-book"></i> Tec de Culiacan</span>
				</div>
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="index.html">Inicio</a></li>	
				      <li><a  href="#">Areas</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>Areas</h4>
									<ul>
										<li><a href="products.html">Formal Shoes</a></li>
										<li><a href="products.html">Boots</a></li>
										<li><a href="products.html">Sports Shoes</a></li>
										<li><a href="products.html">Casual Shoes</a></li>
										<li><a href="products.html">Running Shoes</a></li>
										<li><a href="products.html">Sneakers</a></li>
										<li><a href="products.html">Loafers</a></li>
										<li><a href="products.html">Slippers</a></li>
										<li><a href="products.html">Sandals</a></li>
										<li><a href="products.html">Flip-flops</a></li>
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
					</li>
				<li><a  href="{{asset("/")}}">Realizar Test</a></li>				
			  </ul>
			</div>
		<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div> 
		<div class="clearfix"> </div>
			<!---pop-up-box-->
					<link href="{{asset("css/popuo-box.css")}}" rel="stylesheet" type="text/css" media="all"/>
					<script src="{{asset("js/jquery.magnific-popup.js")}}" type="text/javascript"></script>
					<!---//pop-up-box-->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>	Test</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div> <hr>
<!--banner-->
   @yield('banner')
<!--//banner-->
<!--content-->
<!--............................................................................................... Yield -->
<article>
   @yield('contenido')
</article>
<!--//content-->
<!--footer-->
<div class="footer">
    @yield('footer')
	<div class="footer-bottom">
		<div class="container">
				<div class="col-sm-3 footer-bottom-cate">
					<h6>Maestro en Ciencias C.</h6>
					<ul>
						<li><a>Zueriel Dathan Mora Felix</a></li>						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate">
					<h6>Alumno</h6>
					<ul>
						<li><a href="#">Osuna Zazueta Eddie Isac</a></li>											
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate">
					<h6>Alumno</h6>
					<ul>
						<li><a href="#">Ramirez Salazar Luis Fernando</a></li>						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate cate-bottom">
					<h6>Alumno</h6>
					<ul>
						<li><a href="#">Sandoval Alfaro Oscar Eliut</a></li>						
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2015 Test Vocacional. All Rights Reserved</p>
			</div>
	</div>
</div>
<!--//footer-->
</body>
</html>