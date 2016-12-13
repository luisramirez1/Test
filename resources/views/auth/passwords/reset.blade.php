@extends('principal')

@section('contenido')
<div class="container">
    <div class="register">
        <h1>Cambiar Contraseña</h1>
        
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="col-md-12  register-top-grid">   
                    <div class="mation">
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span style="margin-left: 15px;">Email</span>
                            <div style="margin-left: 15px;">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
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
                            <input id="password-confirm" type="password" name="password_confirmation" required style="width: 101.5%;">
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                
                <div class="register-but" style="margin-left: 15px;">
                    <input type="submit" value="Cambiar Contraseña" id="botonS">
                    <div class="clearfix"> </div>
                </div>
            </form>
        </div>
</div>
@endsection