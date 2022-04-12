<?php
	session_start();
?>

  <!DOCTYPE html>
   <html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
       <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
        <title>
         Home of books
       </title>
       <style type="text/css">
           nav{
             float: right; 
             padding-top:20px;
}
          nav li {
             padding-top:20px;
             display:inline-block;
}
        </style>
    </head>
    <body>
       <div class="wrapper">
         <header>
           <div class="logo">
            <img src="img/logo2.PNG" style="width:116px;height: 74px;">
            <h2>READOO</h2>
            </div>
             
               <?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul class="navbar">
						<li><a href="index.php">Home</a></li>
						<li><a href="book.php">Books</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="feedback.php">Feedback</a></li>
						<li><a href="contact.php" target="_blank">contact</a></li> 
						<li><a href="Sign-Up.php">Sign up</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul class="navbar">
								<li><a href="index.php">Home</a></li>
								<li><a href="book.php">Books</a></li>
								<li><a href="login.php">Loging</a></li>
								<li><a href="feedback.php">Feedback</a></li>
								<li><a href="contact.php" target="_blank">contact</a></li> 
							</ul>
						</nav>
		<?php
		}
			
		?>
            
             
             
         </header>
          <section>
            <div class="parallax">
               <div class="paracon">
                   <h1>Welcome To Libraray</h1>
               </div>
                
            </div>
            <div class="container counter">
               <div class="row">
                   <div class="col-md-3">
                       <i class="fa fa-address-book"></i>
                       <p>15000</p>
                       <p>Books</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-address-book"></i>
                       <p>46</p>
                       <p>Cetagory</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-users"></i>
                       <p>1569</p>
                       <p>Users</p>
                   </div>
                   <div class="col-md-3">
                       <i class="fa fa-address-book"></i>
                       <p>7</p>
                       <p>Language's</p>
                   </div>
               </div>
                
            </div>
            <div class="slider">
               
                
            </div>

         </section>
           <?php
    include"footer.php";
    
         ?>
        </div>
        
        
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script type="text/javascript">
        $(".num").counterUp({delay:10,time:1000})                         
                               }
        </script>
        
    </body>
</html>