<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail(Request $request)
    {
        /* dd($request->all()); */
        $data = ([
            'contacto' => $request->contacto,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje
        ]);

        Mail::to('personal@test.cl', 'Personal')
            ->send(new SendMessage($data));

        return redirect('/')->with('success', '¡Correo enviado exitosamente!');
    }
}
