<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmail;

class ContactoController extends Controller
{
    public function enviarMensaje(Request $request)
    {
        /*
        $user_name = 'Contacto Barbersys';
        $to = 'barbersysContacto@gmail.com';
        Mail::to($to)->send(new EnviarEmail($user_name));
        return 'Mail sent successfully';
        */
        Mail::to($request->input('email'))->send(new EnviarEmail($request));
    }
}
