<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); // Esto me devolverá todos los posts que hayan en la BBDD
        $users = User::all();
        /*
            compact ~ crea un array que contiene variables y sus valores
            Por cada variable, compact() busca una variable con ese nombre en la tabla de símbolos 
            actual y las añade al array de salida de modo que el nombre de la variable se convierte 
            en la clave y el contenido de la variable se convierte en el valor para esa clave.
        */
        // devuelvo la vista de la alerta una vez enviado el post junto con el array de posts
        return view('posts.show',compact('posts' , 'users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('posts.createPost',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
          - Recogemos el usuario que envió el post
          - se lo enviamos al metodo 'posts' del modelo User
          - creamos el recurso en la BBDD con create
        */
        $request->user()->posts()->create([
            'username' => $request->user()->username, 
            'post' => $request->post,
            ]);

        return redirect('forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
