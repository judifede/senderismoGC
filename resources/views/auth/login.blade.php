@extends('layouts.senderism', ['loginStyle' => true])

@section('content')
<section>
    <div class="login-container">
        <div id="output"></div>
        <h2>Acceder</h2>
        <div><img class="avatar" src="img/login/avatar.ico"></img></div>
        <div class="form-box">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <input type="text"name="username" value="{{ old('username') }}" placeholder="Nombre de usuario">

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" name="password" placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div>
                        <label>Remember me</label><input type="checkbox" name="remember" id="remember">
                    </div>
                        
                    <button type="submit" class="btn btn-info btn-block login">Acceder</button>
                    <a class="btn btn-link" href="{{ url('/register') }}">¿Eres nuevo?¿Quieres registrarte?</a>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Has olvidado tu contraseña?</a>
            </form>
        </div>
    </div>
</section>
@endsection
