<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.cssStyle')

</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
        @include('admin.leftSidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
         <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

           @include('admin.topbar')
       @include('admin.content')
        <!-- End of Content Wrapper -->

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
