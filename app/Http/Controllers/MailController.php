<?php

namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $request){
    	Mail::to('wilsondaniel95@hotmail.com')->send(new VerificationMail());
    }
}
