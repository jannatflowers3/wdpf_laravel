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
      <h1 class="text-center p-5">Chef Add</h1>
<div class="formwrap" style="top: 70px; right:-140px;position:relative">
  <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
    {{-- {{ method_field('PUT') }} --}}
    @csrf
  
        <div class="form-group">
            <label for="name">Name</label>
                   <input type="text" class="form-control text-white" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="speciality	">Speciality</label>
                   <input type="text" class="form-control text-white" id="speciality" name="speciality">
          </div>

      <div class="form-group">
        <label >Image</label>
        <input type="file" name="image"> 
      </div>

    <button type="submit" class="btn btn-primary me-2">Submit</button>
  </form>
</div>
      

    </div>



   @include('admin.admin_allscripts')
  </body>
</html>