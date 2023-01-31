@extends('backend.layouts.base')
@push('styles')
 <!-- Custom fonts for this template -->
 <link href="/backend_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link
     href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
     rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="/backend_assets/css/sb-admin-2.min.css" rel="stylesheet">

 <!-- Custom styles for this page -->
 <link href="/backend_assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users Data</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tfoot>
                        @foreach ($users as $user)
                            
                       
                        <tr>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>edit</th>
                           
                        </tr>
                        @endforeach
                    </tfoot>
                    <tbody>
                             <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        @foreach ($users as $user)
                            
                       
                        <tr>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>edit</th>
                           
                        </tr>
                        @endforeach
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection