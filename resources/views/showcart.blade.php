<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>


                            <li class="scroll-to-section"><a href="#reservation">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                 Cart[{{$count}}]
                                </a>
                                @endauth

                                @guest
                                Cart[0]
                                @endguest

                            </a>
                        </li>



                            <li>
                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       <li> <x-app-layout>

                            </x-app-layout>
                       </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                       </li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li> 
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
   <div id="top">
    <table align="center" border="3"> 
     <tr style="background-color:#5CB3FF;">
         <th style="padding: 20px;">Food Name</th>
         <th style="padding: 20px;">Price</th>
         <th style="padding: 20px;">Quantity</th>
         <th style="padding: 20px;">Action</th>
     </tr>

<form action="{{url('/orderconfirm')}}" method="POST">
  @csrf

     @foreach($data as $data)
     <tr style="background-color: #B7CEEC;" align="center">

         <td style="padding: 15px;">
        <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">{{$data->title}}
      </td>
         <td style="padding: 15px;">
          <input type="text" name="foodprice[]" value="{{$data->price}}" hidden="">{{$data->price}}</td>
         <td style="padding: 15px;">
          <input type="text" name="foodquantity[]" value="{{$data->quantity}}" hidden="">{{$data->quantity}}</td>
         
     </tr>
     @endforeach

     @foreach($data2 as $data2)
     <tr style="position: relative; top: -110px; right: -300px;">

       <td style="padding: 10px;">
          <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a>
       </td>
     </tr>
     @endforeach


    </table>


<div align="center" style="padding: 10px;">
  
<button style="color: black" class="btn btn-primary" type="button" id="order" >Order new</button>
</div>

<div align="center" style="padding: 10px; background-color: #659EC7; display: none;" id="appear">
<div style="padding: 10px;">
  <label>Name :</label>
  <input type="text" name="name" placeholder="write your name">
</div>
<div style="padding: 10px;">
  <label>Phone :</label>
  <input type="number" name="phone" placeholder="write your phone">
</div>
<div style="padding: 10px;">
  <label>Address :</label>
  <input type="text" name="address" placeholder="write your address">
</div>
<div style="padding: 10px;">
  <input style="color: black" type="submit" class="btn btn-success" value="Order Confirm">
  <button id="close" type="button" class="btn btn-danger">Close</button>
</div>


</div>
</form>






</div>
       <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script type="text/javascript">
      $("#order").click(
         function()
         {
             $("#appear").show();
         }

        );
       $("#close").click(
         function()
         {
             $("#appear").hide();
         }

        );



    </script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>