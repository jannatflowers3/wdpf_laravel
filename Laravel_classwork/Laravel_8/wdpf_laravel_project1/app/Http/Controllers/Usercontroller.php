<?php

namespace App\Http\Controllers;

use App\Models\Phone;
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
        echo $users->phoneTable[0]->phone;
        echo "<br>";
        echo $users->phoneTable[1]->phone;
        // dd = discribe kore database k
   }
   public function phoneData()
   {

          $phone = Phone::find(1);
        echo "User Name :".$phone->user->name;
        echo "<br>";
        // user table ar name
        echo "User Phone :" .$phone->phone;
   }
   public function roleAssign()
   {
          $user = User::find(1);
     $roleIds = [2,3];
     // $user->roles()->attach($roleIds);

     // roleids ar 1,2 no roules add hobe roles table theke
          // $roledetach = [1, 2];
          // $user->roles()->detach($roleIds);
          // ager 1,2 no rule k 4,5 korte parbe

          // $roledetach = [1, 2];
          $user->roles()->sync($roleIds);

   }
}
