<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('website.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
        //   'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
        //   'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('website.email-template', $data, function($message) use ($data) {
          $message->to('mhmad.algendy123@yahoo.com')
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
