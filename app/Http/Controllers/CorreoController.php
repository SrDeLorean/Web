<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorreoController extends Controller{

    public function store(Request $request)
    {
        if($request['g-recaptcha-response']!=null || $request['g-recaptcha-response']!=''){
            $details = [
                'name' => $request->nombre,
                'email' => $request->email,
                'body' => $request->body
            ];
            \Mail::to('xebaelvemgador@gmail.com')->send(new \App\Mail\contacto($details));
            return redirect()->back()->with('msg', 'Se envio el correo.');
        }else{
            return redirect()->back()->withErrors('msg', 'Complete el recaptcha.');
        }
    }
}