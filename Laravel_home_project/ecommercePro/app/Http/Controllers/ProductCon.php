<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductCon extends Controller
{
    public function view_product()
    {
        $cata_lists = Category::all();
        return view('product.addProduct',compact('cata_lists'));
    }
    public function add_product(Request $request)
    {
      $add_product = new Product;
       $add_product->title = $request->p_title;
       $add_product->description = $request->p_des;
       $add_product->price = $request->p_price;
       $add_product->quantity = $request->p_quantity;
       $add_product->discount_price = $request->dis_price;
       $add_product->catagory = $request-> p_catagory;
    //    $add_product->image = $request->p_image;
    if($request->p_image){
        $imageName = time().'.'. $request->p_image->extension();
        // $request->p_image->storeAs('images' ,$imageName);
        $request->p_image->move(public_path('product_photos'),$imageName);
        $add_product->image = $imageName;
    }
    else{
        $product->p_image = "";
    }
       $add_product->save();
       return redirect()->back()->with('message','Product Added Successfully');
    }

    public function productList()
    {
        $productLists = Product::all();
        return view('product.productList',compact('productLists'));
    }

    // delete product
    public function delete_product($id)
    {
        $delete_product = Product::find($id);
        $delete_product->delete();
        return redirect()->back()->with('message',"Product Deleted Successfully");
    }

    // edit product
    public function edit_product($id)
    {
        $edit_product = Product::find($id);
        $cata_lists = Category::all();
        return view('product.editProduct',compact('edit_product','cata_lists'));
        // return redirect()->back()->with('message','Product Added Successfully');
     }

    //  update product
    public function update_product( Request $request,$id)
    {
        $update_product = new Product;
        $update_product->title = $request->p_title;
        $update_product->description = $request->p_des;
        $update_product->price = $request->p_price;
        $update_product->quantity = $request->p_quantity;
        $update_product->discount_price = $request->dis_price;
        $update_product->catagory = $request-> p_catagory;
     //    $add_product->image = $request->p_image;
     if($request->p_image){
         $imageName = time().'.'. $request->p_image->extension();
         // $request->p_image->storeAs('images' ,$imageName);
         $request->p_image->move(public_path('product_photos'),$imageName);
         $editupdate_product_product->image = $imageName;
     }

        $update_product->update();
        return redirect('/productList')->back()->with('message','update Added Successfully');
    }
}
