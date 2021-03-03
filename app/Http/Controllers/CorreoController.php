<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Message;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    //
    public function enviar (Request $request)
    {
        $pathToFile = "";
        $containFile = false;

        $nombre = $request->input("nombre");
        $destinatario = "jclementeh@toluca.tecnm.mx";
        $email = $request->input("destinatario");
        $asunto = $request->input("asunto");
        $contenido = $request->input("contenido_email");
        $telefono = $request->input("telefono");

        $data = array('nombre' => $nombre, 'asunto' => $asunto, 'email' => $email, 'telefono' => $telefono ,'contenido'=>$contenido);
        $respuesta = Mail::send('plantilla_correo', $data, function($message) use ($nombre, $asunto, $destinatario, $containFile, $pathToFile){
            $message->from('jclementeh07@gmail.com','Jesus Hernandez');
            $message->to($destinatario)->subject("Contacto Portafolio");
        });

        if (!$respuesta) {
            return view("mensaje")
                //->with('var','1')
                //->with('ruta_boton','form_enviar_correo')
                //->with('mensaje_boton','Nuevo')
                ->with('msj','Correo Enviado Correctamente');
        }
        else
        {
            return view("mensaje")
                //->with('var','2')
                //->with('ruta_boton','home')
                //->with('mensaje_boton','Ir al home')
                ->with('msj','Error al enviar correo');
        }
    }
}
