@extends('principal')

<!-- Main Content -->
@section('contenido')
<div class="container">
    <div class="register">
        <h1>Recuperar Contraseña</h1>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}
                <div class="col-md-12  register-top-grid">   
                    <div class="mation">
                        
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
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
                <div class="register-but">
                    <input type="submit" value="Recuperar Contraseña" id="botonS">
                    <div class="clearfix"> </div>
                </div>
            </form>
    </div>
</div>
@endsection