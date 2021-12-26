<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
      <div style="position: relative; top: 100px; right: -150px; padding-bottom: 150px;">
      
        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">

          @csrf

          <div style="padding: 10px;">
            <label style="margin: 10px;">Title</label>
            <input style="color: black;" type="text" name="title" value="{{$data->title}}" required="">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;">Price</label>
            <input style="color: black;" type="number" name="price" value="{{$data->price}}" required="">
          </div>
          
          <div style="padding: 10px;">
            <label style="margin: 10px;">Description</label>
            <input style="color: black;" type="text" name="description" value="{{$data->description}}" required="">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;"> Old Image</label>
            <img height="100" width="200" src="/Food_Image/{{$data->image}}">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;"> New Image</label>
            <input type="file" name="image" required="">
          </div>
          <div style="background-color: #16F529; height: 50px; width: 100px; padding-top: 10px;" align="Center">
            
            <input type="submit" value="Save">
          </div>
        </form>
      </div>

  </div>
    @include("admin.topnavebar")
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>