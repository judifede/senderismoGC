@extends('layouts.senderism', ['comunidadStyle' => true])

@section('content')
        <section class="contenedor">
        <h1>Últimos mensajes enviados al foro</h1>
        <article class="mensajesActuales">
            @foreach($users as $user)
                @foreach($posts as $post)
                    @if($post->user_id == $user->id && count($post->post) > 0)
                    <div class="perfil" >
                        <p class="nombreUser">{{$user->username }}</p>
                        <img src="{{ $user->img }}" class="fotoUser"/>
                    </div>
                    <div class="texto">
                        <h2>Titulo</h2>
                        <p>{{$post->post}}</p>
                    </div>
                    <p class="publiUser">Publicado el dia: {{$post->created_at}}</p>
                    @endif
                @endforeach
            @endforeach
        </article>
    </section>
@endsection