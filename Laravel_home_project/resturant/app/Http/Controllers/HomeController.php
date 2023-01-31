<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
class HomeController extends Controller
{
    public function index()
    {
        $datas = food::all();
        return view('home',compact('datas'));
    }
    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminHome');
        }
        else{
            return view('home');
        }
    }
}

