@extends('layouts.senderism', ['comunidadStyle' => true])

@section('content')
    @include('alerts.success')
    <section class="contenedor">
        <h1>Bienvenido a nuestro foro</h1>
        <div id="showing">
            <strong>Showing: </strong>
            <button>All</button>
            <button>Open</button>
            <button>Solved</button>
        </div>
        @can('create_post',$users)
        {{ Form::open(array('url' => 'forum/create')) }}
            {{ Form::submit('Crear Nuevo Post', ['id' => 'crearPost'])}}
        {{ Form::close() }}
        @endcan
        <article class="hilosActuales">
            <img src="{{ asset('img/comunidad/userThais.png') }}" class="fotoUser">
            <h4>Experiencias</h4>
            <p>Posted by <strong>Thais</strong>. Publicado el dia: 2016-03-10 11:37:08</p>
        </article>
        <article class="hilosActuales">
            <img src="{{ asset('img/comunidad/userDiego.png') }}" class="fotoUser">
            <h4>Sugerencias para la página</h4>
            <p>Posted by <strong>Diego</strong>. Publicado el dia: 2016-03-11 09:10:42</p>
        </article>
        
    </section>
    <img src="img/icons/flecha-arriba.svg" id="flechaSubir" onclick="window.scrollTo(0, 0)"/>
    
@endsection