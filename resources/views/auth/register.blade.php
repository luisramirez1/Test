@extends('principal')

@section('contenido')

<div class="container">
    <div class="register">
        <h1>Register</h1>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="col-md-6  register-top-grid">   
                    <div class="mation">
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span>Nombre</span>
                            <div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span>Email</span>
                            <div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span>Celular</span>
                            <div>
                                <input id="name" type="tel" name="tel" value="{{ old('name') }}" onkeypress="return justNumbers(event);" pattern="[0-9]{10}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                     
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                     <div class=" col-md-6 register-bottom-grid">
                           
                            <div class="mation">

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span style="margin-left: 15px;">Contraseña</span>
                                    <div style="margin-left: 15px;">
                                        <input id="password" type="password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div>
                                    <span>Confirmar Contraseña</span>
                                    <input id="password-confirm" type="password" name="password_confirmation" required style="width: 103%;">
                                </div>
                            </div>
                     </div>
                     <div class="clearfix"> </div>
                
                <div class="register-but">
                    <input type="submit" value="Registrar" id="botonS">
                    <div class="clearfix"> </div>
                </div>
            </form>
           </div>
</div>

@endsection
