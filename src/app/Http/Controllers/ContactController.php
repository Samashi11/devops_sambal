<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
  // public function send(Request $request)
  // {
  //   // Honeypot anti-spam
  //   if ($request->filled('website')) {
  //     abort(403);
  //   }

  //   // Validasi WAJIB
  //   $data = $request->validate([
  //     'name' => 'required|string|max:100',
  //     'email' => 'required|email',
  //     'subject' => 'required|string|max:150',
  //     'message' => 'required|string|max:2000',
  //   ]);

  //   // Kirim email
  //   Mail::raw(
  //     "Nama: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
  //     function ($mail) use ($data) {
  //       $mail->to('info@darkmage.my.id')
  //         ->subject('[Contact] ' . $data['subject'])
  //         ->replyTo($data['email'], $data['name']);
  //     }
  //   );

  //   return back()->with('success', 'Pesan berhasil dikirim.');
  // }

  public function send(Request $request)
  {
    $data = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required',
    ]);

    Mail::to('info@darkmage.my.id')->send(
      new ContactMail($data)
    );

    return back()->with('success', 'Pesan terkirim');
  }

}
