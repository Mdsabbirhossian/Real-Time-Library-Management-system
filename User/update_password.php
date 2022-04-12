<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Update Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  
  <style type="text/css">
      .wrapper
      {
       width: 1200px;
          height:550px;
          background-color:black;
          opacity: .8;
          color:gray;
          margin:40px auto;
          padding:10px;
          text-align: center;
          
      }
  </style>   
</head>
<body class="parallax6">
<div class="wrapper">
     <div class="loging" style="padding-top: 15px;">
        <h1>Libraray Administration System</h1><hr>
         <h1>Change Password</h1>
         <div class="updatebox">
      <form  name="login" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="New Password" required=""> <br>
          

          <button name="submit" value="Login">Update</button> 
        </div>
        
    </form>
     </div>
     </div>
    
    
</div>
  <?php
    if(isset($_POST['submit']))
    {
        if(mysqli_query($db,"UPDATE user SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]';"))
        {
          ?>
           <script type="text/javascript">
              alert("Password changed successfully");
            </script>
    <?php  
            
        }
           
    }
    
    ?>
    

</body>
</html>