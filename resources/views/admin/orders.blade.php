<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
  	<div class="container-scroller">
    @include("admin.navbar")
  <div style="position: relative; top: 110px; right: -50px;">
  	<form action="{{url('/search')}}" method="GET">
  		@csrf
  		<input type="text" name="search" style="color: black">
  		<input type="submit" value="Search" class="btn btn-success">
  	</form>
    <table border="3">
    	
    	<tr style="background-color: #2C3539;" align="center">
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Name</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Phone</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Address</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Food Name</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Price($)</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Quantity</th>
    		<th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Total Price($)</th>
            <th style="padding: 20px; font-style: normal; font-size: 15px;color: white;">Action</th>
    	</tr>
    	@foreach($data as $data)
    	<tr style="background-color: #D5D6EA;" align="center">
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->name}}</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->phone}}</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->address}}</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->foodname}}</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->foodprice}}$</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->foodquantity}}</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;">{{$data->foodprice * $data->foodquantity}}$</td>
    		<td style="padding: 10px; font-style: normal; font-size: 15px;color: black;"><a href="{{url('/deletefoodorder',$data->id)}}">Delete</a></td>
    	</tr>
    	@endforeach
    </table>

</div>



  </div>

    @include("admin.topnavebar")
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </body>
</html>