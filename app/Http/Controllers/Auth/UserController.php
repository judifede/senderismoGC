<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Mail;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $user = new User;
        $data['username'] = $user->username = $request->username;
        $data['email'] = $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(100);
        $data['confirm_token'] = $user->confirm_token = str_random(100);
        $user->save();

        Mail::send('emails.confirmar', ['data' => $data], function($mail) use($data){
        $mail->subject('Confirma tu cuenta');
        $mail->to($data['email'], $data['username']);
        });
        Flash::success("¡Te has registrado ".$user->username." de forma exitosa! Recibirás un correo de confirmación en tu correo electrónico.");
        return redirect()->route('auth.login')->withInput();
    }*/

    public function confirmRegister($email, $confirm_token){
        $user = new User;
        $the_user = $user->select()->where('email', '=', $email)->where('confirm_token', '=', $confirm_token)->get();
        if(count($the_user) > 0){
            $active = 1;
            $confirm_token = str_random(100);
            $user->where('email', '=', $email)
            ->update(['active' => $active, 'confirm_token' => $confirm_token]);
            Flash::success("¡Enhorabuena ".$the_user[0]['username']." ya puedes iniciar sesión!");
            return redirect()->route('auth.login');
        } else {
            return redirect()->route('/'); //pagina de inicio
        }
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
