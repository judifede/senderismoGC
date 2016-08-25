@extends('layouts.senderism')

@section('content')
    <h1>Gracias por registrarte en Senderismo GC </h1>

        <div>
            <a href="{{ url() }}/auth/confirm/email/{{ $data['email'] }}/confirm_token/{{ $data['confirm_token'] }}">Please follow the link below to verify your email</a>.<br/>

            If you have problems, please paste the above URL into your web browser.
        </div>
@endsection