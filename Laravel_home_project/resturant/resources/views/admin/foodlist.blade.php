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
       
            <div class="table-responsive">
                <h1 class="text-center">Food List</h1>
                <table class="table">
                  <thead>
                    <tr class="table-primary">
                      <th style="width:10%"> Food Title</th>
                      <th style="width:15%">  Food Name </th>
                      <th style="width:30%"> Image </th>
                      <th style="width:30%"> Description </th>
                      <th> Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($foodlists as $foodlist)     
                    <tr class="table-info">
                      <td> {{$foodlist->title}} </td>
                      <td>tk.{{$foodlist->price}}</td>
                      <td ><img src="/foodimage/{{$foodlist->image}}" alt="productimg" height="200px" width="200px"></td>
                      <td > {{$foodlist->description}} </td>  
                      {{-- <td>Edit</td> --}}
                      <td> 
                        <a href="{{url('/deletemenu',$foodlist->id)}}"> Delete</a>
                        <a href="{{url('/editmenu',$foodlist->id)}}"> Edit</a>
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