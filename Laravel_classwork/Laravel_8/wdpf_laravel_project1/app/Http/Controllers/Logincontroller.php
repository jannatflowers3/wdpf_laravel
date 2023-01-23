<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('auth.login');
        // $user = new User();
        // $data->user = $user;
        // $data->where('email', "jannat@gmail.com");
        // $data                        
    }
    public function login(Request $request){
        return redirect('/dashboard');
    }
}
