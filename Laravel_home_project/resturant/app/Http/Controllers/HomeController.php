<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $datas = food::all();
        $chefsall_datas = FoodChef::all();
        return view('home', compact('datas', 'chefsall_datas'));
    }
    public function redirects()
    {

        $datas = food::all();
        $chefsall_datas = FoodChef::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminHome');
        } else {
            // $chefsall_datas = FoodChef::all();
            $user_id = Auth::id();
            $count = AddCart::where('user_id', $user_id)->count();
            return view('home', compact('datas', 'chefsall_datas', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
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
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = AddCart::where('user_id', $id)->count();
        $data2 = Addcart::select('*')->where('user_id', '=', $id)->get();
        $joindatas = AddCart::where('user_id', $id)->join('food', 'add_carts.food_id', '=', 'food.id')->get();

        return view('showcart', compact('count', 'joindatas', 'data2'));
    }

    public function remove($id)
    {
        $remove = AddCart::find($id);
        $remove->delete();
        return redirect()->back();
    }

    public function orderConfirm(Request $request)
    {
        foreach($request->foodname as $key=>$foodname){
            $data = new Order;

        }
    }
}

