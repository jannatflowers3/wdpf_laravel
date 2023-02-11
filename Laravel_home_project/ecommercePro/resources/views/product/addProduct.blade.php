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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{-- <div class="card">
                    <h1 class="text-center p-4"> Add Product </h1>
                </div> --}}
                {{-- <a href="{{url('/catagorylists')}}"><button type="button" class="btn btn-success commn_btn mt-4"> Category List</button></a> --}}

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="categoryForm mt-5">
                    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          <label for="p_title" class="col-sm-4 col-form-label">Product Title:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="p_title" id="p_title" placeholder="Product Title">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="p_des" class="col-sm-4 col-form-label">Production Description:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="p_des" name="p_des" placeholder="Product Description">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="p_price" class="col-sm-4 col-form-label">Product Price:</label>
                            <div class="col-sm-8">
                              <input type="number"  class="form-control" name="p_price" id="p_price" placeholder="Product Price">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="p_quantity" class="col-sm-4 col-form-label">Product   Quantity :</label>
                            <div class="col-sm-8">
                              <input type="number"  class="form-control" name="p_quantity" id="p_quantity" placeholder="Product Quantity">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="dis_price" class="col-sm-4 col-form-label">Discount Price :</label>
                            <div class="col-sm-8">
                              <input type="number"  class="form-control" name="dis_price" id="dis_price" placeholder="Discount Price ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="dis_price" class="col-sm-4 col-form-label">Product Category :</label>
                            <div class="col-sm-8">
                              <select name="p_catagory">
                                <option value="Selected One disable selected">Selected</option>
                                @foreach ($cata_lists as $cata_list)


                                <option value="{{$cata_list->catagory_name}}">{{$cata_list->catagory_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="p_image" class="col-sm-4 col-form-label">Product Image :</label>
                            <div class="col-sm-8">
                              <input type="file"  class="form-control" name="p_image" id="p_image">
                            </div>
                          </div>
                          <div class="form-group row justify-content-center">
                            <label for="p_image" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success commn_btn mt-4"> Submit</button>
                            </div>
                          </div>

                      </form>
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
