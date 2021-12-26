<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
     <div style="position: relative;top: 110px;right: -100px;">
       <form action="{{url('/updatechef',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
         <div style="padding: 10px;">
           <label>Chef Name :</label>
           <input style="color: black" type="text" name="name" value="{{$data->name}}">
         </div>
         <div style="padding: 10px;">
           <label>Specilaty :</label>
           <input style="color: black" type="text" name="specilaty" value="{{$data->speciality}}">
         </div>
         <div style="padding: 10px;">
           <label>Old Image</label>
           <img height="200" width="150" src="/chefimage/{{$data->image}}">
         </div>
         <div style="padding: 10px;">
           <label>New Image</label>
           <input type="file" name="image">
         </div>
         <div style="padding: 10px;">
           <input align="center" style="color: white; background-color: #0000FF;height: 50px; width: 100px;" type="submit" value="Update Chefs">
         </div>
       </form>
     </div>


    </div>
    @include("admin.topnavebar")
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>