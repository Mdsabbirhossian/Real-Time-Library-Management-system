<?php
	session_start();
?>
  

  
  <!DOCTYPE html>
   <html>
    <head>
       
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
    .navbar
      {
    padding-top: 10px;
       height: 100px; 
      }
  </style>   
</head>
<body>
<?php
    $r=mysqli_query($db,"SELECT COUNT(status) as Total FROM `text` WHERE status='no' and sender='User' ;");
    $count= mysqli_fetch_assoc($r);
    ?>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">READOO</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php" target="_blank">Home</a></li>
            <li><a href="book.php">Books</a></li>
            
            <li><a href="contact.php" target="_blank">contact</a></li>
            <li><a href="faback.php">Feedbacks</a></li> 
          </ul>
           <?php
               if(isset($_SESSION['login_user']))
                
               {?>
                 <ul class="nav navbar-nav">
                  <li><a href="userinfo.php">User Information</a></li>
                  <li><a href="fine.php">Fine</a></li>
                  <li><a href="profile.php">Profile</a></li>
                 </ul>
                  <ul class="nav navbar-nav navbar-right"> 
                  <li><a href="text.php"><span class="glyphicon glyphicon-envelope"><span class="badge bg-green"><?php  echo $count['Total'];   ?></span></span></a></li>
                  <li><a href="#">
                   <?php
                   echo "<img class='img-circle profile_img' height=40 width=45 src='img/".$_SESSION['picture']."'>";
                   echo " ".$_SESSION['login_user'];
                   ?>
                   </a></li>
                      
                      <li><a href="logout.php"class="glyphicon glyphicon-log-out">Logout</a></li>
                  </ul>  
                  <?php
                   
               }
          else
          {?>
             <ul class="nav navbar-nav navbar-right">

            <li><a href="admin-login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
          <!--  <li><a href="admin-signup.php"><span class="glyphicon glyphicon-user">Signup</span></a></li> !-->
            
          </ul>
              
           <?php   
          }
                
                ?>
          

      </div>
    </nav>
        
         
       
      <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>