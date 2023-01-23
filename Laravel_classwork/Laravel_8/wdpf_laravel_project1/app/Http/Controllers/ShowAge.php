<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAge extends Controller
{
    public function index(Request $req)
    {
        echo "welcome you'r $req->age years old";
    }
}
