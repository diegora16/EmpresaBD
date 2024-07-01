<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store()
    {
        $msg=request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);

        //Enviar correo
        Mail::to('t512701520@unitru.edu.pe')->send(new MensajeRecibido($msg));

        Return 'Mensaje Enviado';


            }
}
