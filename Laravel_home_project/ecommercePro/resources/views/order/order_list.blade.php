<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.cssStyle')
<style>

    .commn_btn{
background-color: #e74a3b!important;
border:1px solid #e74a3b;
transition: 0.3s;
}
.commn_btn:hover{
    background-color: #e2837a;
    border:1px solid #e74a3b;
    color: #fff;
  transform: scale(1.1);
}
.order_title{
    font-size: 50px;
    color: #e74a3b
}
</style>

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
        @include('admin.leftSidebar')
        <!-- End of Sidebar -->
         <!--   Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
           @include('admin.topbar')
       {{-- @include('admin.content') --}}

  <section class="admin_category">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                {{-- @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif --}}

                <div class="ordersearch text-center">
                    <h1 class="order_title">Order List</h1>
                    <form action="{{url('/search')}}" method="get">
                        @csrf
                        <input type="search" name="search" placeholder="Search For Something">
                        <input type="submit" value="Search" name = 'search' class="btn btn-outline-primary">
                    </form>
                </div>

                <div class="categoryForm mt-5">
                    <table class="table mt-3">
                        <tr class="thead-dark">
                            <th>Name</th>
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Product Title</th>
                            <th> Quantity</th>
                            <th> Price</th>
                            <th> Payment Status</th>
                            <th> Delivery Status</th>
                            <th>Image</th>
                            <th>Delivered</th>
                            <th>Invoice</th>
                            <th>Send Email</th>
                        </tr>
                       @foreach ($order_lists as $order_list)
                           <tr>
                            <td>{{$order_list->name}}</td>
                            <td>{{$order_list->email}}</td>
                            <td>{{$order_list->phone}}</td>
                            <td>{{$order_list->product_title}}</td>
                            <td>{{$order_list->quantity}}</td>
                            <td>{{$order_list->price}}</td>
                            <td>{{$order_list->payment_status}}</td>
                            <td>{{$order_list->delivery_status}}</td>
                            <td><img src="/product_photos/{{$order_list->image}}" alt="orderimg" width="100px"></td>


                            <td>
                                @if( $order_list->delivery_status == 'processing')
                                <a href="{{url('/delivered',$order_list->id)}}" class="btn btn-success text-dark"
                                onclick="return confirm('Are you sure this product is delivered')">Delivered</a>

                                @else
                                    <p>Delivered</p>

                                    @endif
                            </td>
                            <td><a class="btn btn-success" href="{{url('print_pdf',$order_list->id)}}">Pdf</a></td>
                            <td><a class="btn btn-success" href="{{url('send_email',$order_list->id)}}">Send Email</a></td>

                        </tr>
                       @endforeach
                    </table>

                    </div>
            </div>
        </div>
    </div>
  </section>






    </div>
</div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 @include('admin.scriptStyle')
</body>
</html>
