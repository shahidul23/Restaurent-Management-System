<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
     
     <div style="position: relative; top: 110px; right: -50px;">
      <table bgcolor="#3A3B3C" border="3px" >
        <tr style="background-color: #36454F;" align="Center">
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Name</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Email</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Phone</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Date</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Time</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Guest</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Message</th>
          <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Actions</th>
        </tr>
        @foreach($data as $data)
        <tr  style="background-color: #C0C0C0;" align="Center">
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->name}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->email}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->phone}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->date}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->time}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->guest}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->message}}</td>
          <td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/deleteorder',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
    @include("admin.topnavebar")
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>