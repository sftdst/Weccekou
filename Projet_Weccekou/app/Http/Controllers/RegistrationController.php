<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomUserMail;


class RegistrationController extends Controller
{
    public function save_registration(Request $request)
    {
        $data=array();
        $data['email']=$request->email;
        $data['password']=$request->password;
        $data['confirmation']=$request->confirmation;

       Mail::to($request->email)->send(new welcomeUserMail());


        echo("dst");
    }
}
