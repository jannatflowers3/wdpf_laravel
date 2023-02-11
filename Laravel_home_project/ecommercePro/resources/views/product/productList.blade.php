<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.cssStyle')
<style>
    table,tr{
        color: #000;
    }
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
</style>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
        @include('admin.leftSidebar')
        <!-- End of Sidebar -->
         <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
           @include('admin.topbar')
       {{-- @include('admin.content') --}}

  <section class="admin_category">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h1 class="text-center p-4">Product  List</h1>
                </div>
                {{-- <a href="{{url('/view_category')}}"><button type="button" class="btn btn-success commn_btn mt-3">Add Category</button></a>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close " data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif --}}
                <table class="table mt-3">
                    <tr class="thead-dark">
                        <th>Product Title</th>
                        <th> Description</th>
                        <th> image</th>
                        <th> Quantity</th>
                        <th> Price</th>
                        <th> Discount Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($productLists as $productList )
                    <tr class="table-danger">
                        <td>{{$productList->title}}</td>
                        <td >{{$productList->description}}</td>
                        <td > <img src="/product_photos/{{$productList->image}}" width="120px" alt="productImg">
                           </td>
                        <td >{{$productList->quantity}}</td>
                        <td >{{$productList->price}}</td>
                        <td >{{$productList->discount_price}}</td>

                        <td>
                            <a href="{{url('/edit_product',$productList->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('/delete_product',$productList->id)}}"
                                onclick="return confirm('Are you sure to delete this??')"
                                class=" btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
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
