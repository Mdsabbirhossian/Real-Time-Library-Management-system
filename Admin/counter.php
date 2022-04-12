<!DOCTYPE html>
   <html>
    <head>
      <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="counter.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

        <title>
        
        </title>
       <style>
        .fa {
    font-size: 45px;
    width: 35px;
    height: 35px;
    text-decoration: none;
}

     .fa:hover {
    opacity: .7;
}

        </style>
       
    </head>
    <body>
       
        <div class="counter">
               <div class="row">
                   <div class="col-md-3">
                       <i class="fa fa-book"></i>
                       <div class="num"></div><p>15000</p></div>
                       <p>Books</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-address-book"></i>
                       <div class="num"></div><p>150</p></div>
                       <p>Cetagory</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-users"></i>
                      <div class="num"></div><p>1500</p></div>
                       <p>Users</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-address-book"></i>
                       <div class="num"></div><p>24</p></div>
                       <p>Language's</p>
                   </div>
               </div>
                
            </div>
        
        <script>
         $(" .num").counterUp({delay:10,time:1000});
        
        </script>
       
    </body>
</html>