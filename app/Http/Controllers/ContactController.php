<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        Mail::raw("Pesan dari: {$request->name}\nEmail: {$request->email}\n\n{$request->message}", function ($message) {
            $message->to('test@example.com') // alamat email ini tidak masalah, tetap masuk ke Mailtrap
                    ->subject('Pesan dari Form Kontak');
        });

        return back()->with('success', 'Email berhasil dikirim!');
    }
}
