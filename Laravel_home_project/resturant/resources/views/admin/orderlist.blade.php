<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('admin.admin_allstyle')
    <style>
      .serarchbutton{
      
        margin: 20px auto;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller"> 
       @include('admin.nav')
         {{-- user info start --}}
      
            <div class="table-responsive">
                <h1 class="text-center">Order List</h1>

                <div class="serarchbutton">
                  <form action="{{url('/searchOrder')}}">
                    @csrf
                    <input type="text" name="searchorder" class="text-black">
                    <input type="submit" value="Search" class="btn btn-success">
                  </form>
                 </div>

                <table class="table text-white">
                  <thead>
                    <tr class="table table-danger" style="color:white">
                      <th > Food Title</th>
                      <th >  Food Price </th>
                      <th> Food Quantity </th>
                      <th>Total Price </th>
                      <th> User Name </th>
                      <th> User Phone </th>
                      <th > User Address </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr class="table table-success">
                    {{-- <td>{{$order->id}}</td> --}}
                    <td>{{$order->foodname}}</td>
                    <td>{{$order->price}} tk</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price * $order->quantity}} tk</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->address}}</td>
                    <td>
                      <a href="" class="btn btn-success">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
        </div>
    </div>  
       @include('admin.admin_allscripts')
  </body>
</html>