@extends('principal')

@section('contenido')
<div class="account">
    <div class="container">
        <h1>Cuenta</h1>
        <div class="account_grid">
               <div class="col-md-6 login-right">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span>Email</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span>Contraseña</span>
                        <input id="password" type="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="word-in">
                        <a class="forgot" href="{{ url('/password/reset') }}">Olvidaste la contraseña? </a>
                         <input type="submit" value="Ingresar">
                    </div>
                </form>
               </div>   
                <div class="col-md-6 login-left">
                 <h4>¿Nuevo Usuario?</h4>
                 <p>Al crear una cuenta en nuestra pagina, usted podrá realizar el TEST VOCACIONAL.</p>
                 <a class="acount-btn" href="{{ url('/register') }}">Crear una Cuenta</a>
               </div>
               <div class="clearfix"> </div>
             </div>
    </div>
</div>
@stop
