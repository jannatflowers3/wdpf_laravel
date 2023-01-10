<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
   public function index(){
    return view('backend/pages/admin_home');
   }
   public function about(){
    return view('about');
   }
}
