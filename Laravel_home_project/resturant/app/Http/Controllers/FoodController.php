<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodmenu()
    {
        // $data = Food::all();
        return view('admin.food');
    }
    public function uploadfood( Request $request)
    {
       $data = new Food;
        if($request->image){        
            $imageName = time() . "." .
            $request->image->extension();
            $request->image->move(public_path('foodimage'), $imageName);
            $data->image = $imageName;
          }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function foodlist()
    {
        $foodlists = Food::all();
        return view('admin.foodlist', compact('foodlists'));

    }
   
    public function deletemenu($id)
    {
        $deletemenu = food::find($id);
        $deletemenu->delete();
        return redirect()->back();
    }

    public function editmenu($id)
    {
        $editmenu = food::find($id);
        return view('admin.foodedit', compact('editmenu'));
    }


    public function update(Request $request, $id)
    {
        $update = food::find($id);
        if($request->image){        
            $imageName = time() . "." .
            $request->image->extension();
            $request->image->move(public_path('foodimage'), $imageName);
            $update->image = $imageName;
          }
        $update->title = $request->title;
        $update->price = $request->price;
        $update->description = $request->description;
        $update->update();
        return redirect('/foodlist')->with('msg', 'Food Updated');
    }
}
