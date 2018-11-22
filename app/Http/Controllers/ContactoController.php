<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmail;

class ContactoController extends Controller
{
    public function enviarMensaje(Request $request)
    {
        Mail::to('barbersysContacto@gmail.com')->send(new EnviarEmail($request));
    }
}
