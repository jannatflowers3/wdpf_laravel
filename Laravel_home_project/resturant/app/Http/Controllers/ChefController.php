<?php

namespace App\Http\Controllers;

use App\Models\FoodChef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
 public function chef()
 {
        return view('admin.chef');
 }
 public function uploadchef(Request $request)
 {
              $uploadchef = new FoodChef;


              if($request->image){        
                     $imageName = time() . "." .
                     $request->image->extension();
                     $request->image->move(public_path('chefImage'), $imageName);
                     $uploadchef->image = $imageName;
                   }
                 $uploadchef->name = $request->name;
                 $uploadchef->speciality = $request->speciality;
                 $uploadchef->save();
                 return redirect()->back();

 }
}
