<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\FoodChef;

class HomeController extends Controller
{
    public function index()
    {
        $datas = food::all();
        $chefsall_datas = FoodChef::all();
        return view('home',compact('datas','chefsall_datas'));
    }
    public function redirects()
    { 
        
        $datas = food::all();
        $chefsall_datas = FoodChef::all();
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminHome');
        }
        else{
        // $chefsall_datas = FoodChef::all();
            $user_id = Auth::id();
            $count = AddCart::where('user_id',$user_id)->count();
            return view('home',compact('datas','chefsall_datas','count'));
        }
    }

    public function addcart( Request $request, $id)
    {
        if(Auth::id()){
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;
            $cart = new AddCart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();

            // dd($user_id);

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
}

