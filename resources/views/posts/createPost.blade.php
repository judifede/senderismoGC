@extends('layouts.senderism', ['comunidadStyle' => true])

@section('content')
	<section>
		<h1>Crear Nuevo Post</h1>
	    {{ Form::open(['route' => 'forum.store','method'=>'POST']) }}
	        {!! csrf_field() !!}
	            {{ Form::textarea('post', null, ['id' => 'campoTextoPost'], ['size' => '60x8']) }}
	            {{ Form::submit('Enviar Post', ['id' => 'enviarPost'])}}
	    {{ Form::close() }}
    </section>
@endsection