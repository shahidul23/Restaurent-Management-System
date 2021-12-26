<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
     <div class="container-scroller">
    @include("admin.navbar")
    
    <div style="position: relative; top: 100px; right: -150px;">
      
        <form action="{{url('/uplodefood')}}" method="POST" enctype="multipart/form-data">

          @csrf

          <div style="padding: 10px;">
            <label style="margin: 10px;">Title</label>
            <input style="color: black;" type="text" name="title" placeholder="Write a Title">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;">Price</label>
            <input style="color: black;" type="number" name="price" placeholder="Write a Price">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;">Image</label>
            <input type="file" name="image" required="">
          </div>
          <div style="padding: 10px;">
            <label style="margin: 10px;">Description</label>
            <input style="color: black;" type="text" name="description" placeholder="Write a Description">
          </div>
          <div style="background-color: #16F529; height: 50px; width: 100px; padding-top: 10px;" align="Center">
            
            <input type="submit" value="Save">
          </div>
        </form>

        <div style="padding-top: 50px; padding-bottom: 80px;">
          <table bgcolor="#3A3B3C" border="2px" >
        <tr style="background-color: #36454F;" align="Center">
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Foods Name</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Price</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Description</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Images</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Update</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Delete</th>
        </tr>
        @foreach($data as $data)
        <tr tr style="background-color: #C0C0C0;" align="Center">
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->title}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->price}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->description}}</td>
          <td ><img height="100" width="150" src="/Food_Image/{{$data->image}}"></td>

          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/updatemanu',$data->id)}}">Update</a></td>

          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/deletemanu',$data->id)}}">Delete</a></td>
 
        </tr>
        @endforeach
        
      </table>
        </div>

    </div>

  </div>
    @include("admin.topnavebar")
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>