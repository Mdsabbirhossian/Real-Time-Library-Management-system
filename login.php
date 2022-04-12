<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
    .signuplink a
      {
        border:4px white;   
          
      }
    .actorinput
      {
       
    width: 20px;
       margin-left: 551px;
      margin-top: 10px;   
          
      }
       .actorinput input
      {
          width: 20px;
          margin-top:-5px;
          margin-bottom: -5px;
          
          
      }
  </style>   
</head>
<body class="parallax1">

 <div>
     <div class="loging" style="padding-top: 15px;">
        <h1>READOO</h1><hr>
         <h1>User Login</h1>
         <div class="logbox">
      <form  name="login" action="" method="post">
       
        <b><p style="font-size:40px;color:red;margin-left:500px;">Login as</p></b>
        <div class="actorinput">
       <label style="font-size:20px;color:white;float:left;margin-top:-5px;" for="admin">Admin</label><input type="radio" name="actor" id="admin" value="admin">
       <label style="font-size:20px;color:white;"for="user">User</label><input  type="radio" name="actor" id="user" value="user">
          </diV>
          <div class="login">
         
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <button name="submit" value="Login">Login</button> 
        </div>
        <br><br>
        <a href="update_password.php" style="color:red; font-size:45ps; text-decoration:none;">Forget password?</a>
        
    </form>
     </div>
     </div>
</div>

  <?php

    if(isset($_POST['submit']))
    {
      if($_POST['actor']=='admin')
      {
          $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      $row=mysqli_fetch_assoc($res);
    
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>

          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white;">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['picture'] = $row['Picture'];
          $_SESSION['username'] = '';
        

        ?>
          <script type="text/javascript">
            window.location="Admin /profile.php"
          </script>
        <?php
      }
        
          
          
          
      }
        else
        {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[username]' && password='$_POST[password]';");
       $row=mysqli_fetch_assoc($res);
    
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>

          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white;">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
         $_SESSION['picture'] = $row['Picture'];

        ?>
          <script type="text/javascript">
            window.location="User/profile.php"
          </script>
        <?php
      }
        }
    }

  ?>

</body>
</html>