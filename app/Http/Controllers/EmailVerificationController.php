<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Mail\VerificationMail;
use App\UnverifiedUser;
use App\User;
use Validator;


// correo no debe estar repetido

class EmailVerificationController extends Controller
{
    public function sendVerificationEmail(Request $request) {

        // validate form data
        // error validation messages
        $error_messages = [
            'same' => 'Las contraseñas no coinciden',
            'regex' => 'El correo debe ser institucional',
            'email' => 'Este campo debe ser un correo válido',
            'min' => 'La contraseña debe ser minimo de 6 digitos',
            'unique' => 'El correo ya está en uso',
            'not_in' => 'Esta plataforma está destinada únicamente a estudiantes',
        ];
        // validation logic
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                'regex:/.*@javeriana\.edu\.co/',
                'unique:users,email',
                Rule::notIn([
                    'efrain.ortiz@javeriana.edu.co',
                    'angela.carrillo@javeriana.edu.co',
                    'rueda-andrea@javeriana.edu.co',
                    'jlopez@javeriana.edu.co',
                    'cbustaca@javeriana.edu.co',
                    'gchavarr@javeriana.edu.co',
                    'florez-l@javeriana.edu.co',
                    'egonzal@javeriana.edu.co',
                    'ca.parraa@javeriana.edu.co',
                    'jpavlich@javeriana.edu.co',
                    'metorres@javeriana.edu.co',
                    'mcuriel@javeriana.edu.co',
                    'eruiz@javeriana.edu.co',
                    'hhurtado@javeriana.edu.co',
                    'luisa.barrera@javeriana.edu.co',
                    'carreno-j@javeriana.edu.co',
                    'ragonzalez@javeriana.edu.co',
                    'paez-r@javeriana.edu.co',
                    'pomares@javeriana.edu.co',
                    'anmontero@javeriana.edu.co',
                ]),
            ],
            'password' => 'required|same:password_confirmation|min:6',
        ],$error_messages);
        // test validation 
        if ($validator->fails()) {
            return redirect('register')
            ->withErrors($validator)
            ->withInput();
        }



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
