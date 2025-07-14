<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validar los campos del formulario
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Enviar el correo usando el Mailable
        Mail::to('International.sales@espumasmedellin.com.co')->send(new ContactMail($validated));

        return back()->with('success', 'Tu mensaje ha sido enviado exitosamente.');
    }
}
