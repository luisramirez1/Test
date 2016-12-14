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
<link href="{{asset("css/estilos.css")}}" rel="stylesheet" type="text/css" media="all" />
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
						<span>-</span><a  href="{{ url('/register') }}"  >Registrar</a></p>
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
							@if(Auth::user()->imagen == null)
            					<a href="#" data-toggle="modal" data-target="#myModal89"><img id="imagen" src="{{asset("images/usuarios/user.png")}}" class="" alt=""></a> 
            				@else
              					<a href="#" data-toggle="modal" data-target="#myModal89"><img id="imagen" src="{{asset("images/usuarios")}}/{{Auth::user()->imagen}}" alt=""></a> 
            				@endif
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
					<span><i></i> Inteligencia Artificial</span>
				</div>
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="{{ url('/') }}">Inicio</a></li>	
				      <li><a  href="#">Areas</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col8">
								<div class="h_nav">
									<h4>Areas</h4>
									<ul>
										<li><a href="{{ url('/areas/1') }}">Arte y Creatividad</a></li>
										<li><a href="{{ url('/areas/2') }}">Ciencias Sociales</a></li>
										<li><a href="{{ url('/areas/3') }}">Económica, Administrativa y Financiera</a></li>
										<li><a href="{{ url('/areas/4') }}">Ciencia y Tecnología</a></li>
										<li><a href="{{ url('/areas/5') }}">"Ciencias Ecológicas, Biológicas y de Salud"</a></li>
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
					</li>
				@if (Auth::guest())
					<li><a onclick="alertaL()" style="cursor:pointer; cursor: hand;">Realizar Test</a></li>
				@else
					<li><a href="{{ url('/test') }}">Realizar Test</a></li>
				@endif
				@if (Auth::guest())
				@else
					<li><a  href="#">Resultados</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col8">
								<div class="h_nav">
									<h4>Resultados</h4>
									<ul>
										@if(Auth::user()->npregunta == 0)
											<li><a style="text-decoration: none;">Por el momento no has realizado el TEST VOCACIONAL. No esperes mas.</a></li>
				                        @else
					                        @for ($i = 1; $i < Auth::user()->npregunta+1; $i++)
												<li><a href="{{url('/resultados')}}/{{Auth::user()->id}}/{{$i}}">Test #: {{$i}}</a></li>				            
					                        @endfor
				                        @endif   
										
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
					</li>
					@if(Auth::user()->tipoUsuario == 1)
						<li><a href="{{ url('/consultaUsuarios') }}">Consultar Usuarios</a></li>
					@endif

				@endif			
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
                        function alertaL() {
                            $("#alertaL").fadeTo(8000, 1000).slideUp(1000, function(){
                            $("#alertaL").slideUp(1000);
                            });
                        }

                </script>
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
					<div class="alert alert-danger alert-dismissible" id="alertaL" role="alert" style="width: 60%; margin: 0 auto; display: none;">
                        <strong>Espera!</strong> Necesitas <a href="{{url('login')}}">INICIAR SESION</a> para realizar el TEST VOCACIONAL.
                    </div>
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
						<li><a>Osuna Zazueta Eddie Isac</a></li>											
						<li><img src="{{asset("images/usuarios/edie.jpg")}}" alt="" style="width: 30%; cursor:pointer; cursor: hand; margin-left: 37px;" class="img-responsive img-circle" onclick="window.open('http://www.facebook.com/eddie.osuna.z','_blank');"></li>											
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate">
					<h6>Alumno</h6>
					<ul>
						<li><a href="#">Ramirez Salazar Luis Fernando</a></li>
						<li><img src="{{asset("images/usuarios/luis.jpg")}}" alt="" style="width: 30%; cursor:pointer; cursor: hand; margin-left: 45px;" class="img-responsive img-circle" onclick="window.open('http://www.facebook.com/luisramirez.lfrs','_blank');"></li>						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate cate-bottom">
					<h6>Alumno</h6>
					<ul>
						<li><a href="#">Sandoval Alfaro Oscar Eliut</a></li>
						<li><img src="{{asset("images/usuarios/gato.jpg")}}" alt="" style="width: 30%; cursor:pointer; cursor: hand; margin-left: 40px;" class="img-responsive img-circle" onclick="window.open('http://www.facebook.com/oscar.eliux','_blank');"></li>					
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2015 Test Vocacional. All Rights Reserved</p>
			</div>
	</div>
</div>
<!--//footer-->
 	 @if (Auth::guest())
  @else
  <div class="modal fade md" id="myModal89" tabindex="-1" role="dialog" aria-labelledby="myModal89"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>
          <h3 class="modal-title" id="nombrem">
            <b>{{ Auth::user()->name }}</b> <br>
          </h3>
        </div>
        <div class="modal-body modal-body-sub">
          <div class="row">
            <div class="col-md-12 modal_body_left modal_body_left1">
              <div class="sap_tabs">  
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                  <div class="col-md-6">
                    <ul>
                      <b>Tipo de Usuario:</b>   @if(Auth::user()->tipoUsuario==1)
                                  Administrador
                                @endif
                                @if(Auth::user()->tipoUsuario==2)
                                  Invitado
                                @endif<br>
                      <b>Correo:</b> {{Auth::user()->email}} <br>
                      <b>Celular:</b> {{Auth::user()->tel}}<br>
                    </ul>
                    <a href="{{url('/editar')}}/{{Auth::user()->id}}" class="btn btn-info btn-sm" id="editar">Editar</a>
                    @if(Auth::user()->tipoUsuario==2)
                    <a href="{{url('/eliminarUsuariosI')}}/{{Auth::user()->id}}" class="btn btn-info btn-sm" id="editar">Eliminar Cuenta</a>
                    @endif
                  </div>
                  <div>
                    @if(Auth::user()->imagen == null)
                      <a href="#" data-toggle="modal" data-target="#myModal89"><img id="imagen2" src="{{asset("images/usuarios/user.png")}}" alt=""></a> 
                    @else
                      <a href="#" data-toggle="modal" data-target="#myModal89"><img id="imagen2" src="{{asset("images/usuarios")}}/{{Auth::user()->imagen}}" alt=""></a> 
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  @endif

    <script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>

