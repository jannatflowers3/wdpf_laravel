<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function login()
    {
        return view('backend.login');
    }
}
