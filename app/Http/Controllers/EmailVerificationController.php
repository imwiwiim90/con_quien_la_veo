<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Mail\VerificationMail;
use App\UnverifiedUser;
use App\User;

class EmailVerificationController extends Controller
{
    public function sendVerificationEmail(Request $request) {

    	// validate form data
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
    		'password' => 'required|same:password_confirmation',
    	]);

    	// find an existing email and delete it
    	$unverifiedUser = UnverifiedUser::where('email',$request->email)->first();
    	if ($unverifiedUser != null) $unverifiedUser->delete();

    	// create a random token for verification
    	$token = str_random(40);

    	// create a verification user
    	$unverifiedUser = new UnverifiedUser;

    	$unverifiedUser->name = $request->name;
    	$unverifiedUser->email = $request->email;
    	$unverifiedUser->password = Hash::make($request->password);
    	$unverifiedUser->verification_token = $token;

    	$unverifiedUser->save();

    	// send mail
    	Mail::to($request->email)->send(new VerificationMail($unverifiedUser->id,$token));

    	return view('invitacion_revisar_email');
    }

    public function verifyEmail($id,$token){
    	$unverifiedUser = UnverifiedUser::find($id);

    	// error workaround
    	if ($unverifiedUser == null) return view('home');

    	// create a real user
    	$user = new User;

    	$user->name = $unverifiedUser->name;
    	$user->email = $unverifiedUser->email;
    	$user->password = $unverifiedUser->password;

    	// save user and delete not verified
    	$user->save();
    	$unverifiedUser->delete();

    	return view('verificacion_email_exitoso');
    }
}
