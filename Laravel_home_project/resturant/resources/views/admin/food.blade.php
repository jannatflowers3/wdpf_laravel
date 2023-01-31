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
      <h1 class="text-center p-5">Food Add</h1>
<div class="formwrap" style="top: 70px; right:-140px;position:relative">
  <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
    {{-- {{ method_field('PUT') }} --}}
    @csrf
  
        <div class="form-group">
            <label for="title">Title</label> 
                   <input type="text" class="form-control text-white " id="title" name="title">
             
          </div>
  
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control text-white" id="price" name="price">
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image"> 
      </div>
    <div class="form-group">
        <label>Description</label>
      <textarea class="form-control text-white" id="exampleTextarea1" rows="4" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
  </form>
</div>
      

    </div>



   @include('admin.admin_allscripts')
  </body>
</html>