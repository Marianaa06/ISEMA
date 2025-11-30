<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KarirController extends Controller
{
    public function apply(Request $request)
    {
        // Validasi input jika perlu
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'no_hp' => 'required|string|max:20',
            'cv' => 'required|mimes:pdf|max:2048',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'message' => $request->input('message'),
            'posisi' => $request->input('posisi'),
        ];

        $cvFile = $request->file('cv');

        Mail::send('emails.job-application', ['data' => $data], function ($message) use ($data, $cvFile) {
            $message->to('hr@technocelebes.com') // Mailtrap akan menerima email ini
                ->subject('Lamaran ' . ($data['posisi'] ?? '') . ' dari ' . $data['name'])
                ->attach($cvFile->getRealPath(), [
                    'as' => 'CV_' . $data['name'] . '.' . $cvFile->getClientOriginalExtension(),
                    'mime' => $cvFile->getMimeType(),
                ]);
        });

        return back()->with('success', 'Lamaran kamu berhasil dikirim!');
    }
}
