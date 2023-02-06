<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant Template</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
      .showcart{
        margin-top: 120px;      
      }
      .footer{
        padding: 0px 0px;
      }
      .removedata{
        position: relative;
        top: -80px;
        right: -100px;
     }
     .closebutton{
        background-color: red!important

     }
     .confirmorder{
        background-color: #28a745!important
     }
     .confirmorder:hover{
        background-color: none;
        border:1px solid #28a745;

     }
    </style>
    </head>    
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="position: relative" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            {{-- <li class="scroll-to-section" style="background-color: pink;border-radius: 7px;
                            padding: 0px 5px">
                              @auth
                              <a href="{{url('/showcart',Auth::user()->id)}}" >
                                Cart [{{$count}}]

                                @endauth
                                @guest
                                    Cart [0]
                                @endguest

                            </a>   
                        </li>             --}}
                             {{-- login registration --}}
                             <li>
                                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <li>
                            <x-app-layout>

                            </x-app-layout>
                        </li>
                            {{-- <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li> --}}
                        @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
    
                            @if (Route::has('register'))
                              <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                        @endauth
                    </div>
                @endif
                            </li>

                        </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>
<section class="showcart ">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <form method="post" action="{{url('/orderConfirm')}}">
                @csrf
            <table class="table table-bordered justify-content-center">
                <thead>
                  <tr class="table-success">
                    <th>  Food Title </th>
                    {{-- <th>  Image </th> --}}
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Action </th>
                  </tr>
                </thead>
                 <tbody>
                  
                    @foreach ($joindatas as $joindata)
                   
                    <tr> 
                        <td style="width: 40%">
                            <input type="text" name="foodname[]" value="{{$joindata->title}}" hidden="">
                            {{$joindata->title}}
                        </td>
                        {{-- <td style="width: 40%;text-align:center">
                         <img src="/foodimage/{{$joindata->image}}" alt="foodimg" width="80px">
                        </td> --}}
                        <td style="width: 5%">
                            <input type="text" name="price[]" value="{{$joindata->price}}" hidden="">

                            {{$joindata->price}}
                        </td>
                        <td style="width: 5%">
                            <input type="text" name="quantity[]" value=" {{$joindata->quantity}}" hidden="">

                            {{$joindata->quantity}}
                        </td>
                        {{-- <td>
                           
                        </td> --}}
                 
                         
                    @endforeach
                    @foreach($data2 as $data2remove)
                 <tr>
                    <td style="width: 10%">
                        <a href="{{url('/remove',$data2remove->id)}}">Delete</a>
                      </td>
                    </tr>
                 </tr>
                    @endforeach
                </tbody>         
              </table>
              <div class="orderbtn mb-2 p-5 text-center">
                  <button class="btn btn-primary" id="order" type="submit" style="color: black">Order Now</button>
              </div>
              <div class="orderbtn_hide" id="appear"  style="display: none">
                {{-- <div class="orderform " style="width: 40%; margin:0px auto"> --}}
                    <div class="form-group">
                        <label for="name">Name</label> 
                          <input type="text" class="form-control text-black " id="name" name="name">           
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label> 
                             <input type="number" class="form-control text-black " id="phone" name="phone">           
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label> 
                              <input type="text" class="form-control text-black " id="address" name="address">           
                      </div> 
                      <button class=" btn btn-success confirmorder" type="submit">Order Confirm </button>
                      <button  id="close"  class=" btn btn-danger closebutton" type="submit">Close </button>
             </div>
            </form>
        </div>
    </div>
 </div>
</section>
    

    <!-- ***** Footer Start ***** -->
    <footer style="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Designer: Jannatul Ferdaush</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    <!-- jQuery -->
    {{-- <script src="assets/js/jquery-2.1.0.min.js"></script> --}}
    <script src="jquery-3.6.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    {{-- order script  --}}
    <script type="text/javascript">
          $("#order").click(function(){
            $('#appear').show()
          }) ;
          $('#close').click(function(){
            $('#appear').hide()
          }) ;
    </script>
  </body>
</html>