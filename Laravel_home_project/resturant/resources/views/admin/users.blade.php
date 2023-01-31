<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('admin.admin_allstyle')
  </head>
  <body>
    <div class="container-scroller"> 
       @include('admin.nav')
         {{-- user info start --}}
       
            <div class="table-responsive usertable">
                <h1 class="text-center">User Data</h1>
                <table class="table table-bordered justify-content-center">
                  <thead>
                    <tr>
                      <th> User Id</th>
                      <th>  Name </th>
                      <th> Email </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)     
                    <tr class="table-info">
                      <td> {{$data->id}} </td>
                      <td> {{$data->name}} </td>
                      <td> {{$data->email}} </td>
                       @if($data->usertype =='0')
                     <td> 
                      <a href="{{url('/deleteusers',$data->id)}}">Delete</a></td>
                      @else
                      {
                      <td> <a href="">Not Allowed</a></td>
                      }
                      @endif
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