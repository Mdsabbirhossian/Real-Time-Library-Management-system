<?php
    include"connection.php";
    include "navbar.php";
?>
 
  <!DOCTYPE html>
   <html>
    <head>
       <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style type="text/css">
      .search-btn
      {   
       margin-left:1200px;   
          
      }
      .wrapper
      {
       width: 1000px;
          height:500px;
          background-color:seashell;
          opacity:.8;
          color:gray;
          margin:30px auto;
          padding:20px;
          font-size:25px;
          text-align: center;
          
      }
  </style>   
</head>
<body class="parallax7">
      
           <div class="container">
               <form action="" method="post">
                <button name="submite1" class="search-btn">Edit</button>
                </form>
                
                 <div class="wrapper" >
                  
                         
                 <?php 
                   $q=mysqli_query($db,"SELECT *FROM user WHERE username='$_SESSION[login_user]';");
                     
                  ?>
                  <h1>Profile Information</h1>
                  <?php
                      $row=mysqli_fetch_assoc($q);
                      
                     echo "<div><img class='img-circle profile-img' height=140 width=160 src='img/".$_SESSION['picture']." '></div>"
                     
                   ?>
                   
                   <?php
                        echo "<b>";
                        echo "<table class='table'>";
                                 echo "<tr>";
                                    echo "<td>";
                                       echo "<b>First Name : </b>";
                                    echo "</td>";
                           
                                    echo "<td>";
                                        echo $row['first'];
                                    echo "</td>";
                                 echo "</tr>";
                                 echo "<tr>";
                                    echo "<td>";
                                        echo "<b>Last Name : </b>";             
                                    echo "</td>";
                           
                                    echo "<td>";
                                         echo $row['last'];
                                    echo "</td>";
                                 echo "</tr>";
                                 echo "<tr>";
                                    echo "<td>";
                                        echo "<b>User Name : </b>";             
                                    echo "</td>";
                           
                                    echo "<td>";
                                         echo $row['username'];
                                    echo "</td>";
                                 echo "</tr>";
                                 echo "<tr>";
                                    echo "<td>";
                                        echo "<b>              Email    : </b>";             
                                    echo "</td>";
                           
                                    echo "<td>";
                                         echo $row['email'];
                                    echo "</td>";
                                 echo "</tr>";
                                 echo "<tr>";    
                                    echo "<td>";
                                        echo "<b>Contact    : </b>";             
                                    echo "</td>";
                           
                                    echo "<td>";
                                         echo $row['contact'];
                                    echo "</td>";
                     
                                 echo "</tr>";
                                 echo "<tr>";
                                    echo "<td>";
                                    echo "</td>";
                           
                                    echo "<td>";
                                    echo "</td>";
                                 echo "</tr>";
                                 
                        
                        echo "</table>";
                    
                         echo "</b>";
             
                
                     if(isset($_POST['submite1']))
                     {
                       ?>  
                        <script type="text/javascript">
                        window.location="editpro.php"
                          </script>
                        <?php
                     }
                     ?>
                        
                </div>
                
            </div>
      
         
      <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    </body>
</html>

    