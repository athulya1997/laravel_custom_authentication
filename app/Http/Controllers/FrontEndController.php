<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
   public function homePage(){
    return view('welcome');
   }
   public function Register(){
    return view('auth.register');
   }
   public function Login(){
    return view('auth.login');
   }
   public function registerUser(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    ]);
   }
}

