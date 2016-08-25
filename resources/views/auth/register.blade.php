@extends('layouts.senderism', ['loginStyle' => true])

@section('content')
<section>
    <div class="login-container">
        <div id="output"></div>
        <h2>Registrarse</h2>
        <div><img class="avatar" src="img/login/avatar.ico"></img></div>
        <div class="form-box">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nombre usuario">

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                        </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Dirección e-mail">

                        @if ($errors->has('email'))
                            <strong>{{ $errors->first('email') }}</strong>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <strong>{{ $errors->first('password') }}</strong>
                        @endif
                    </div> 
                        
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">

                        @if ($errors->has('password_confirmation'))
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info btn-block login">Registrar</button>
                    </div>
            </form>
        </div>
    </div>
</section>
@endsection
