<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class FrontController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function sendero()
    {
        return view('sendero');
    }
    public function estado()
    {
        return view('estado');
    }

    public function normativa()
    {
        return view('normativa');
    }
    public function evento()
    {
        return view('evento');
    }
    
    public function comunidad()
    {
        $users = User::all();
        return view('comunidad',compact('users'));
    }
    public function multimedia()
    {
        return view('galeria');
    }
}
