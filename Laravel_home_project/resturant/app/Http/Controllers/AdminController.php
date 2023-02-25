<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
{
    $datas = User::all();
    return view('admin.users', compact('datas'));
}
public function deleteuser($id)
{

    $data = User::find($id);
    $data->delete();
    return redirect()->back();
    // echo "hello";
}

    public function reservation(Request $request)
    {
        $reservation = new Reservation;

        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->guest = $request->guest;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->message = $request->message;
        $reservation->save();
        return redirect()->back();
        return redirect('/')->with('msg','successfully reservation');
    }
    public function orderlists()
    {
         $orders = Order::all();
        return view('admin.orderlist',compact('orders'));
    }
    public function searchOrder(Request $request)
    {
          $search = $request->searchorder;
          $orders = Order::where('foodname','Like','%'.$search.'%')->orWhere
          ('quantity','Like','%'.$search.'%')->orWhere('price','Like','%'.$search.'%')->get();
          return view('admin.orderlist',compact('orders'));

    }
}
