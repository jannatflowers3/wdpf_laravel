@extends('layouts.frontpage')
@section('products')
  <!-- Categories Section Begin -->
  <section class="categories">
    <div class="section-title">
        <h2>All Product</h2>
    </div>
    <div class="container">
        <div class="row"> 
            <div class="categories__slider owl-carousel">
                @foreach ($products as $product)           
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{$product->image_name}}">
                        <h5><a href="#">{{$product->name}}</a></h5>
                        <h6>{{$product->price}}tk.</h6>
                     
                    </div>
                    <add-to-cart product-id="{{$product->id}}"></add-to-cart>
                    {{-- <h6>{{$product->price}}tk.</h6> --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
@endsection