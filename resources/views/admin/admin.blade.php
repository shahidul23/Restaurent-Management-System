<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    
    
      
    @include("admin.topnavebar")
    @include("admin.body")
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscritp")
    <!-- End custom js for this page -->
  </div>
  </body>
</html>