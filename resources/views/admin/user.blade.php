<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">


    @include("admin.navbar")
    <!-- container-scroller -->
    <div style="position: relative; top: 110px; right: -150px;">
      <table bgcolor="#3A3B3C" border="3px" >
        <tr style="background-color: #36454F;" align="Center">
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Name</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Email</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Action</th>
        </tr>
        @foreach($data as $data)
        <tr tr style="background-color: #C0C0C0;" align="Center">
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->name}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->email}}</td>
          @if($data->usertype=="0")
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
          @else
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a>Not Allowed</a></td>
          @endif
        </tr>
        @endforeach
      </table>
    </div>
    <!-- plugins:js -->
  </div>
  @include("admin.topnavebar")
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>