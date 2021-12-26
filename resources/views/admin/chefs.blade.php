<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
     
    <div class="container-scroller">
    @include("admin.navbar")
    <!-- container-scroller -->
    <div style="position: relative; top: 100px; right: -150px;">
      
        <form action="{{url('/uplodechef')}}" method="POST" enctype="multipart/form-data">

          @csrf

          <div style="padding: 10px;">
            <label style="margin: 10px;">Name</label>
            <input style="color: black;" type="text" name="name" placeholder="Write a name">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;">Specilaty</label>
            <input style="color: black;" type="text" name="specilaty" placeholder="Write a specilaty">
          </div>
          <div style="padding: 10px;">
            <label>Image</label>
            <input type="file" name="image" >
          </div>
         
          <div style="background-color: #16F529; height: 50px; width: 100px; padding-top: 10px;" align="Center">
            
            <input type="submit" value="Sublit">
          </div>
        </form>
        <div style="padding-top: 50px; padding-bottom: 120px;">
          <table bgcolor="#3A3B3C" border="2px" >
        <tr style="background-color: #36454F;" align="Center">
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Chefs Name</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Specilaty</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Image</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Update</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Delete</th>
        </tr>
        @foreach($data as $data)
        <tr tr style="background-color: #C0C0C0;" align="Center">
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->name}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->speciality}}</td>
          
          <td ><img height="80" width="120" src="/chefimage/{{$data->image}}"></td>

          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/chefpudate',$data->id)}}">Update</a></td>

          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/chefdelete',$data->id)}}">Delete</a></td>
 
        </tr>
        @endforeach
        
      </table>
        </div>
      </div>
    <!-- plugins:js -->
  </div>
  @include("admin.topnavebar")
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>