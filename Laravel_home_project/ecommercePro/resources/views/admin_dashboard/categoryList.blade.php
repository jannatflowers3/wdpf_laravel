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
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <h1 class="text-center p-4">Category  List</h1>
                </div>
                <a href="{{url('/view_category')}}"><button type="button" class="btn btn-success commn_btn mt-3">Add Category</button></a>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close " data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <table class="table mt-3">
                    <tr class="thead-dark">
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($catagorylists as $catagorylist )
                    <tr class="table-danger">
                        <td>{{$catagorylist->id}}</td>
                        <td >{{$catagorylist->catagory_name}}</td>
                        <td>
                            <a href="{{url('/edit_category',$catagorylist->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('/delete_category',$catagorylist->id)}}"
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
