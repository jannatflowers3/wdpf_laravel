<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <div class="container-scroller"> 
    @include('admin.admin_allstyle')
  </head>
  <body>
    
   
@include('admin.nav')
@include('admin.admin_allscripts')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive usertable">
        <h1 class="text-center">All Reservation Data List</h1>
        <table class="table table-bordered justify-content-center">
          <thead>
            <tr class="table-danger">
        
              <th>  Name </th>
              <th> Email </th>
              <th> Phone </th>
              <th> Guest </th>
              <th> Date </th>
              <th> Time </th>
              <th> Message </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reservation_lists as $reservation_list)     
            <tr class="table-info">
              <td> {{$reservation_list->name}} </td>
              <td> {{$reservation_list->email}} </td>
              <td> {{$reservation_list->phone}} </td>
              <td> {{$reservation_list->guest}} </td>
              <td> {{$reservation_list->date}} </td>
              <td> {{$reservation_list->time}} </td>
              <td> {{$reservation_list->message}} </td>
              <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
</div>
    </div>
  </div>
</div>
</div>
  </body>
</html>