@extends('backend.layouts/app')
@section("content");

<div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Products</h3>
                                        </div><!-- .nk-block-head-content -->
                                       
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                               
                                
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Add Product</h5>
                                            <div class="nk-block-des">
                                                <p>Add information and add new product.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">  
                                        <div class="row g-3">
                                            @if($errors->any())
                                            <div class="alert alert-danger">
                                                <strong> There were some problems with your input</strong>
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            <form action ="{{url('/products')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_name">Product Title</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="product_name" value="{{old('product_name')}}" name="product_name">
                                                    </div>
                                                </div>
                                               
                                            {{-- product details --}}
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_descriptions">Product Details</label>
                                                    <div class="form-control-wrap">
                                                        <textarea name="product_descriptions" id="product_descriptions"
                                                        cols="36" rows="10">
                                                 {{old('product_descriptions')}}
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_price">Product Price</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control" value="{{old('product_price')}}" id="product_price" name="product_price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_stock">Product Stock</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control" value="{{old('product_stock')}} id="product_stock" name="product_stock">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_category">Category</label>
                                                    <div class="form-control-wrap">
                                                       <select name="product_category" id="product_category">
                                                       
                                                        <option  selected disabled>Selected One</option>
                                                        @foreach($cats as $cat)
                                                        <option {{old("product_category")== $cat->id? 'selected':''}} value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                                        @endforeach
                                                       </select>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product_img">Product Image</label>
                                                    <div class="form-control-wrap">
                                                        <input type="file" class="form-control" id="product_img" value="{{old('product_img')}}" name="product_img">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                {{-- <div class="upload-zone small bg-lighter my-2">
                                                    <div class="dz-message">
                                                        <input type="file" class="dz-message">
                                                        <span class="dz-message-text">Drag and drop file</span>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit" ><em class="icon ni ni-plus"></em><span>Add New</span></button>
                                            </div>
                                        </form>
                                        </div>
                                    
                                    </div><!-- .nk-block -->
                                
                            </div>
                            @endsection