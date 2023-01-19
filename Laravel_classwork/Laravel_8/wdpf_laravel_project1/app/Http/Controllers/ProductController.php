<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 $products = Product::latest()->paginate(10);
        $cats= Category::orderBy('cat_name','ASC')->get();
        // $data['products'] = Product::orderBy('id','DESC')->get();
    return view("backend.product.index",compact('products','cats'));
    
    // echo "<pre>";
    //     print_r($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      


        
        $cats= Category::orderBy('cat_name','ASC')->get();
        return view('backend.product.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validation =   $request->validate([
            'product_name' => 'required',
            'product_descriptions' => 'min:3|max:10',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_stock' => 'required',
            'product_img' =>'image|mimes:png,jpg,pdf |max:2048'
            
        ]);
      
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_descriptions = $request->product_descriptions;
        $product->product_price = $request->product_price;
        $product->product_stock = $request->product_stock;
        $product->product_category = $request->product_category;
        if($request->product_img){        
          $imageName = time() . "." .
          $request->product_img->extension();
          $request->product_img->move(public_path('product_photos'), $imageName);
        // ==public folder a img upload hobe 
        //   $request->product_img->storeAs('images' ,$imageName);
            // storage= app= auto akta images folder create hoiye (img folder )a img golo add hobe
          $product->product_img = $imageName;
        }
        else{
            $product->product_img = "";
        }
        // 
     
        $product->save();
            return redirect('/products')->with('msg', 'Product Added');
            // echo "success";
       
      
        
    //  return redirect('/products');
        //or
        // return redirect()->back();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view("backend.product.single",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
