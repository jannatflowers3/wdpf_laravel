<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
   public function index()
   {
        $users = User::find(1);
        // dd($users);
        echo $users->name;
        echo "<pre>";
        // echo $users->phone->phone;
        echo $users->phoneTable->phone;
       
        // dd = discribe kore database k
   }
}
