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
                 return redirect('/chefslist');
 }
      public function chefslist()
      {
          $chefslists = foodchef::all();
          return view('admin.cheflist',compact('chefslists'));
      }
       public function deletechef($id)
        {
            $deletechefs = foodchef::find($id);
            $deletechefs->delete();
            return redirect()->back();
        }
    public function eidtchef($id)
      {
        $editchefs = foodchef::find($id);
    return view('admin.editchef',compact('editchefs'));
    // echo "hello";
   
    }

public function updatechef(Request $request, $id)
{
    $updatechefs = foodchef::find($id);
  if($request->image){
    $imageName = time() . "." .
    $request->image->extension();
    $request->image->move(public_path('chefImage'), $imageName);
      $updatechefs->image = $imageName;
  }
    $updatechefs->name = $request->name;
    $updatechefs->speciality = $request->speciality;
    $updatechefs->save();
    return redirect('/chefslist');
   
}
      
}
