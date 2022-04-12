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
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
       <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        section {
            margin-top: -20px;
        }

        .navbar {
            padding-top: 10px;
            height: 100px;
            background-color:#111;
        }

    </style>
</head>

<body>
   
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand active">Libraray Administration System</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php" target="_blank">Home</a></li>
                <li><a href="book.php">Books</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="contact.php" target="_blank">contact</a></li>
                <li><a href="feedback.php">Feedbacks</a></li>
            </ul>
            <?php
               if(isset($_SESSION['login_user']))
                
               {
            
            
            
            
            
            ?>
             <?php
    $r=mysqli_query($db,"SELECT COUNT(status) as Total FROM `text` WHERE status='no' and username='$_SESSION[login_user]' and sender='admin' ;");
    $count= mysqli_fetch_assoc($r);
    ?>
            
            
            
            
            
            
            <ul class="nav navbar-nav">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="fine.php">Fine</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
               <li><a href="text.php"><span class="glyphicon glyphicon-envelope"><span class="badge bg-green"><?php  echo $count['Total'];   ?></span></span></a></li>
                <li><a href="profile.php">
                        <?php
                   echo "<img class='img-circle profile_img' height=40 width=42 src='img/".$_SESSION['picture']."'>";
                   echo " ". $_SESSION['login_user'];
                   ?>
                    </a></li>
                <li><a href="logout.php" class="glyphicon glyphicon-log-out">Logout</a></li>
                <li><a href="Sign-Up.php"><span class="glyphicon glyphicon-user">Signup</span></a></li>
            </ul>
            <?php
                   
               }
          else
          {?>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
                

            </ul>

            <?php   
          }
                
                ?>


        </div>
    </nav>
     <?php
    
          if(isset($_SESSION['login_user']))
          {
              $day=0;
             $exp='<p style="color: white; background-color:red;"> Expired </P>';  
             $res= mysqli_query($db,"SELECT * from `issue_book` Where username ='$_SESSION[login_user]' and approve='$exp';"); 
             
              
              while($row=mysqli_fetch_assoc($res))
             {
                $d= strtotime($row['return']);  
                $c= strtotime(date("Y-m-d"));
                
                $diff= $c-$d;
                  if($diff>=0)
                  {
                   $day= $day+ floor($diff/(60*60*24)); 
                    
                   
                  }
                  $_SESSION['fine']= $day*10;
             }
          }
    
    
      ?>

     <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>


</body>

</html>
