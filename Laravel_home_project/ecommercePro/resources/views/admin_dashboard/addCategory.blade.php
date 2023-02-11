<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.cssStyle')
<style>
    .button{
        background-color: #FEA116!important;
        border:1px solid #FEA116;
        color: #000;
       border-radius: 6px;
       padding: 7px 10px;
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
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <h1 class="text-center p-4"> Add Category </h1>
                </div>
                <a href="{{url('/catagorylists')}}"><button type="button" class="btn btn-success commn_btn mt-4"> Category List</button></a>

                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="categoryForm mt-5">
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="cat_name">Category Name</label>
                          <input type="text" class="form-control" id="cat_name" name="catagoryName"  placeholder="Add Category">
                        </div>

                        <button type="submit" class=" button">Submit</button>
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
