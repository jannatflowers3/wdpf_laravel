<!DOCTYPE html>
<html lang="en">

<head>
 @include('home.style')
 <style>
    .text_color{
        color: #000;
    }
 </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">

 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->




<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>HOOKOM  </h1>
            {{-- <!-- <img src="/home_template/img/logo.png" alt="Logo"> -->Restaurant --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="menu.html" class="nav-item nav-link">Menu</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="{{url('/show_cart')}}" class="nav-item nav-link">Cart</a>
            </div>
            @if (Route::has('login'))
            @auth

            {{-- <a href="{{route('logout') }}" class="btn btn-primary mr-3 login">Logout</a> --}}
            <x-app-layout>

              </x-app-layout>
               @else
            <a href="{{route('login') }}" class="btn btn-primary mr-3 login">Login</a>
            <a href="{{route('register') }}" class="btn btn-primary mr-3">Registration</a>
            @endauth
            @endif
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">

    </div>
</div>



<!-- Menu section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center text-center">
            <h2>
                Menu <span>Details</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            {{-- @foreach ($product as $products) --}}
                <div class="col-sm-6 col-md-4 col-lg-4">

                    <div class="box  wow zoomIn" data-wow-delay="0.2s">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('/product_details',$product->id)}}" class="option1">
                                    {{-- {{ $product->title }} --}}Menu Details
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/product_photos/{{$product->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{$product->title}}

                            </h6>
                            @if($product->discount_price !=null)

                            <h6 style="color:red;">
                                Discount Price<br>TK.{{$product->discount_price}}</h6>

                            <h6>
                                Price<br>
                               <span style="color:green;text-decoration:line-through">
                                 Tk.{{$product->price}}</span>
                            </h6>
                            @else
                            <h6 style="color:green">
                                Price <br>
                                Tk.{{$product->price}}
                            </h6>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4 col-lg-5" style="margin-top:120px">

                    <h2>Product price :{{$product->title}}</h2>
                    <h2>Product Category : {{$product->name}}</h2>
                    <h2>Product Quantity : {{$product->quantity}}</h2>

                      <p>Product Details :{{$product->description}}</p>
                      {{-- <a href="#" class="btn btn-success">Add to Cart</a> --}}
                      <form action="{{url('/add_product',$product->id)}}" method="post">
                        @csrf
                     <span class="text-red"> Quantity:</span>  <input type="number" name="quantity" value="1" min="1" style="width:80px;"><br>
                        <input type="submit"  value="Add to Cart" class="btn btn-success text-center mt-2 text_color" >
                    </form>

                </div>
        </div>

    </div>
</section>




        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kajla,Jatrabari,Dhaka-1236</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+01300869499</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>jannatflowers3@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

 @include('home.script')
</body>

</html>
