<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admin_allstyle')
   
  </head>
  <body>
    
    <div class="container-scroller"> 
      @include('admin.nav')
      
      
<div class="formwrap mt-5 mb-5" style=" right:-140px;position:relative ;width:50%">
  <h1 class="text-center">Edit Chefs List</h1>
  <form action="{{url('/updatechef',$editchefs->id)}}" method="post" enctype="multipart/form-data">
    {{-- {{ method_field('PUT') }} --}}
    @csrf
  
        <div class="form-group">
            <label for="name">Name</label>
                   <input type="text" class="form-control" id="name" name="name" value="{{$editchefs->name}}">
          </div>
  
    <div class="form-group">
        <label for="speciality">Speciality</label>
        <input type="text" class="form-control" id="speciality" name="speciality" value="{{$editchefs->speciality}}">
      </div>
      <div class="form-group">
        <label>Image</label>
        <img src="/chefImage/{{$editchefs->image}}" alt="updateimg" height="20px">
        <input type="file" name="image"> 
      </div>

    <button type="submit" class="btn btn-primary me-2">Submit</button>
  </form>
</div>
      

    </div>



   @include('admin.admin_allscripts')
  </body>
</html>