<?php

namespace App\Http\Controllers;

use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){

        Mail::to('asbcas@mail.com')->send(new SignupEmail());

        return ('success');
}
}