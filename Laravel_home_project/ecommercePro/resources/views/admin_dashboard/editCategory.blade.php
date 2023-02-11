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
                    <h1 class="text-center p-4">Edit Category </h1>
                </div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="categoryForm mt-5">
                    <form action="{{url('/update_category',$edit_cat->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="cat_name">Category Name</label>
                          <input type="text" class="form-control" id="cat_name" name="catagoryName"
                          value="{{$edit_cat->catagory_name}}">
                        </div>

                        <button type="submit" class=" button">Updatae</button>
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
