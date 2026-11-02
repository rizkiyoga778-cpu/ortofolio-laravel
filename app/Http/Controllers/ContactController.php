<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'body' => ['required', 'string', 'max:2000'],
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email belum benar.',
            'subject.required' => 'Subjek wajib diisi.',
            'body.required' => 'Pesan wajib diisi.',
        ]);

        Message::create($data);

        return redirect(route('home') . '#kontak')
            ->with('success', 'Terima kasih, pesanmu sudah terkirim.');
    }
}