@extends('layouts.senderism', ['comunidadStyle' => true])

@section('content')
    @if(session('success'))
        <div class="alert">
            {{session('success')}}
        </div>
    @endif
@endsection