<!-- Sidebar -->
{{-- bg-gradient-primary  --}}
<ul class="navbar-nav sidebar sidebar-dark accordion"
style="background-color: #e74a3b;color:#000"   id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">Resturant <sup>Management</sup></div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Food Category:</h6>

                <a class="collapse-item" href="{{url('/view_category')}}"> Add Category</a>
                <a class="collapse-item" href="{{url('/catagorylists')}}"> Category list</a>
            </div>
        </div>
    </li>

{{-- Product item start --}}
   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fa fa-cube"></i>
        <span>Product</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Food List:</h6>

            <a class="collapse-item" href="{{url('/view_product')}}">Add Product</a>
            <a class="collapse-item" href="{{url('/productList')}}"> Product list</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
        aria-expanded="true" aria-controls="collapseFour">
        <i class="fa fa-cube"></i>
        <span>Order</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Order List:</h6>
            <a class="collapse-item" href="{{url('/order_list')}}"> Order List</a>
            <a class="collapse-item" href="{{url('/add_order')}}">Add Order</a>
        </div>
    </div>
</li>
{{-- product item end --}}
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

</ul>
<!-- End of Sidebar -->
