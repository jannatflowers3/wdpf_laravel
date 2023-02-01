<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include('admin.admin_allstyle')
    <style>
        /* table td img{
            width: 200px;
            height: 200px;
        } */
    </style>
  </head>
  <body>
    <div class="container-scroller"> 
       @include('admin.nav')
         {{-- user info start --}}
       
            <div class="table-responsive  col-lg-10">
                <h1 class="text-center">All Chefs List</h1>
                <table class="table table-bordered justify-content-center">
                  <thead>
                    <tr class="table-success">
                      <th>  Name </th>
                      <th>  Speciality </th>
                      <th> Image </th>
                      <th> Action </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($chefslists as $chefslist)     
                    <tr class="table-info">
                      <td> {{$chefslist->name}} </td>
                      <td> {{$chefslist->speciality}} </td>
                      <td>
                        <img src="/chefImage/{{$chefslist->image}}" alt="chefimg" style="width:150px;height:150px">
                       </td> 
                          <td>
                          <a class="btn btn-success" href="{{url('/eidtchef',$chefslist->id)}}">Edit</a>    
                        </td> 
                        <td>
                          <a class="btn btn-danger" href="{{url('/deletechef',$chefslist->id)}}">Delete</a>    
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