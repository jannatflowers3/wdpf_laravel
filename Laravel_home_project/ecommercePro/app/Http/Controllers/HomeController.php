<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\User as AuthUser;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class HomeController extends Controller
{

     public function index()
     {
      $products = Product::paginate(3);
        return view('home.userpage',compact('products'));
     }
    public function redirect()
    {
      $usertype = Auth::user()->usertype;
      if($usertype == '1'){
        $total_price = product::all()->count();
        $total_order = order::all()->count();
        $total_user = user::all()->count();
        $order = order::all();
        $total_revenue = 0;
        foreach($order as $order){
            $total_revenue = $total_revenue + $order->price;
        }
        $total_delivered =order::where('delivery_status' ,'=','delivered')->get()->count();
        $delivery_status =order::where('delivery_status' ,'=','processing')->get()->count();
;        return view('admin.home',compact('total_price','total_order','total_user','total_revenue','total_delivered','delivery_status'));

      }
      else{
        // return view('home.userpage');
        $products = Product::paginate(3);
        return view('home.userpage',compact('products'));
      }
    }

    public function product_details($id)
    {
       $product = Product::find($id);
      return view('home.menu_details',compact('product'));
    }

  public function add_product(Request $request ,$id)
  {
    if(Auth::id()){
      $user = Auth::user();
      $product =Product::find($id);
       $cart = new Cart;
       $cart->name = $user->name;
       $cart->email = $user->email;
       $cart->phone = $user->phone;
       $cart->address = $user->address;
       $cart->user_id = $user->id;
       $cart->product_id = $product->id;
       $cart->product_title = $product->title;

if($product->discount_price!=null){
    $cart->price = $product->discount_price;
}
else{
    $cart->price = $product->price;
}
       $cart->image = $product->image;
      $cart->quantity = $request->quantity;
      $cart->save();
      Alert::info('Product Added Successfully','We have added product to the cart');
            return redirect()->back();

    }
    else{
        return redirect('login');
    }
  }

  public function show_cart()
  {
  if(Auth::id()){
    $id =Auth::user()->id;
    $showcarts = Cart::where('user_id','=', $id)->get();
    return view('home.showcart',compact('showcarts'));
  }
  else{
    return redirect('/login');
  }
  }

  public function product_remove($id)
  {
    $card_delete = Cart::find($id);
    $card_delete->delete();
    return redirect()->back();
  }

  public function cashon_delivery()
  {
         $user = Auth::user();
         $userid = $user->id;
         $data = Cart::where('user_id','=',$userid)->get();
         foreach($data as $data){
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->user_id = $data->user_id;

            $order->product_id = $data->product_id;
            $order->payment_status= 'cash on delivery';
            $order->delivery_status= 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();

         }
        //  Alert::info(' Order Successfully');
         return redirect()->back()->with('message','We have recived Your oreder.we will connect with you soon ');
  }

  public function  stripe ($totalprice)
  {
   return view('home.cart_payment',compact('totalprice'));

  }

//  stripe payment
public function stripePost(Request $request ,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for Payment"
        ]);


        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where('user_id','=',$userid)->get();
        foreach($data as $data){
           $order = new order;
           $order->name = $data->name;
           $order->email = $data->email;
           $order->phone = $data->phone;
           $order->address = $data->address;
           $order->product_title = $data->product_title;
           $order->price = $data->price;
           $order->quantity = $data->quantity;
           $order->image = $data->image;
           $order->user_id = $data->user_id;

           $order->product_id = $data->product_id;
           $order->payment_status= 'Paid';
           $order->delivery_status= 'processing';
           $order->save();
           $cart_id = $data->id;
           $cart = Cart::find($cart_id);
           $cart->delete();

        }
        session()::flash('success', 'Payment successful!');

        return back();
    }
 public function show_order(){
    if(Auth::id()){
        $user  = Auth::user();
        $userid = $user->id;
        $orders = order::where('user_id','=',$userid)->get();

        return view('home.order',compact('orders'));
    }
    else{
        return redirect('login');
    }
 }
 public function calcel_order($id)
 {
    $order_delete = order::find($id);
    $order_delete->delete();
    return redirect()->back();
 }



}
