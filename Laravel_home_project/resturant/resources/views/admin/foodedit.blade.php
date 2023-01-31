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
  <h1 class="text-center">Edit Food</h1>
  <form action="{{url('/update',$editmenu->id)}}" method="post" enctype="multipart/form-data">
    {{-- {{ method_field('PUT') }} --}}
    @csrf
  
        <div class="form-group">
            <label for="title">Title</label>
                   <input type="text" class="form-control" id="title" name="title" value="{{$editmenu->title}}">
          </div>
  
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" value="{{$editmenu->price}}">
      </div>
      <div class="form-group">
        <label>Image</label>
        <img src="/foodimage/{{$editmenu->image}}" alt="editfoodimg" height="20px">
        <input type="file" name="image"> 
      </div>
    <div class="form-group">
        <label>Description</label>
      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description">{{$editmenu->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
  </form>
</div>
      

    </div>



   @include('admin.admin_allscripts')
  </body>
</html>