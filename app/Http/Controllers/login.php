<?php

namespace App\Http\Controllers;

use App\Mail\test;
use App\Models\email_verification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class login extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }


    public function login(){

        request()->validate([
                'email' =>'required|email',
                'password' =>'required|min:6|alpha_dash',
        ]);

       Auth::attempt([
            'email' =>request('email'),
            'password' =>request('password'),
        ]);


       if (Auth::check()){
           $email_v = User::where('email', request('email'))->first()->email_verified;
           if ($email_v == 1){
               return redirect(route('admin'));
           }else{

               email_verification::where('email',request('email'))
                   ->delete();

               $emaill=request('email');
               $tokenn = sha1(md5(rand()));


               $details = [
                   'title' => 'Active your account',
                   'email' =>$emaill ,
                   'token' => $tokenn
               ];
               email_verification::create([
                   'email' => $emaill,
                   'token' => $tokenn,
               ]);

               Mail::to(request('email'))->send(new test($details));

               return redirect(route('email.confirmation'));
           }
       }else{
           return redirect(route('login'))->with('failed','Email or Password Not matched. please try again');
       }

    }

    public function logout()
    {
        auth::logout();
        return redirect(route('home'));
    }
}
