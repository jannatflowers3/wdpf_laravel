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
            <h1>Email send: {{$order->email}}</h1>

        </div>
        <div class="row justify-content-center">
            <div class=" col-lg-6">
                <form action="{{url('send_user_email',$order->id)}}" method="post">
                    @csrf

                    Email Greeting :<input type="text" name="greeting">
                Email Firstling :<input type="text" name="firstline">
                Email Body :<input type="text" name="body">
                Email Button Name :<input type="text" name="button">
                Email Url :<input type="text" name="url">
                Email Last Line :<input type="text" name="lastline">
                <input type="submit" value="submit" name="submit">
                </form>
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
