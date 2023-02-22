<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use PDF;
class AdminController extends Controller
{
    public function view_category()
    {
      return view('admin_dashboard.addCategory');
    }
    public function add_category(Request $request)
    {
         $data = new Category;
              $data->catagory_name = $request->catagoryName;
              $data->save();
              return redirect()->back()->with('message',"Category Added Successfully");
    }
    public function catagorylists()
    {
        $catagorylists =Category::get();
        return view('admin_dashboard.categoryList',compact('catagorylists'));
    }

    public function edit_category($id)
   {
    $edit_cat = Category::find($id);
     return view('admin_dashboard.editCategory',compact('edit_cat'));
    }


    public function update_category(Request $request,$id)
    {
              $updata_cat = Category::find($id);
              $updata_cat->catagory_name = $request->catagoryName;
              $updata_cat->update();
              return redirect('/catagorylists')->with('message',"Category Update Successfully");
    }

     public function delete_category($id)
    {
        $delete_cat = Category::find($id);
        $delete_cat->delete();
        return redirect()->back()->with('message',"Category Deleted Successfully");
    }

    // order list
    public function order_list()
    {
        $order_lists = Order::all();
      return view('order.order_list',compact('order_lists'));
    }
    public function delivered($id)
    {
        $order_delivered = order::find($id);
        $order_delivered->delivery_status = 'Delivered';
        $order_delivered->payment_status = 'Paid';
        $order_delivered->save();
        return redirect()->back();
    }

    public function print_pdf()
    {
        $pdf = PDF::loadView('order.print_pdf');



    }
}
