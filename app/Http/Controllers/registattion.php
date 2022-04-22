<?php

namespace App\Http\Controllers;

use App\Mail\test;
use App\Mail\VerifyMail;
use App\Models\email_verification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class registattion extends Controller
{
    public function index()
    {
        return view('frontend.res');
    }

    public function registration(){
        request()->validate([
            'username' => 'required|string|alpha_dash',
            'email' =>'required|email',
            'password' =>'required|min:6|alpha_dash|confirmed'
        ]);

        $token = sha1(md5(rand()));
        $email = request('email');

        User::create([
            'username' => request('username'),
            'email' =>request('email'),
            'password' => bcrypt(request('password')),
        ]);


        email_verification::create([
            'email' => $email,
            'token' => $token,
        ]);



        $details = [
            'title' => 'Active your account',
            'email' => $email,
            'token' => $token
        ];

        Mail::to(request('email'))->send(new test($details));

        return redirect(route('email.confirmation'));
    }

    public function verifyUser($email,$token){

       $emaill = count(email_verification::where('email',$email)->get()) ;
       $tokenn = count(email_verification::where('token',$token)->get());

       if ($emaill & $tokenn == 1){

          User::where('email',$email)
              ->update(['email_verified'=> true]);

          email_verification::where('email',$email)
              ->delete();

          return redirect(route('login'))->with('success','Email Verification completed. please login here');
       }
       else
           return back();
    }


public function mail_con()
{
    return view('frontend.mail_res');
}


}
