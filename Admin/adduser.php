<?php
    include"connection.php";
    include "navbar.php";
   
?>
 
  <!DOCTYPE html>
   <html>
    <head>
       <title>Add user</title>
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
  </style>   
</head>
<body>
         
       <section>
             <div class="reging" style="padding-top: 15px;">
               <h1>Create your account</h1>
              
               </div>
               <div class="parallax2">
               <div class="regbox">
               <form name="registration" action="" method="post" >
                   <input class="form-control" type="text" name="first" placeholder="First Name" required><br><br>
                   <input class="form-control" type="text" name="last" placeholder="Last Name" required><br><br>
                    <input class="form-control" type="text" name="username" placeholder="User Name" required><br><br>
                   <input class="form-control" type="password" name="password" placeholder="Password" required><br><br>
                   <input class="form-control" type="text" name="email" placeholder="Email" required><br><br>
                   <input class="form-control" type="number" name="contact" placeholder="Phone" required><br><br>
                  <button name="signup">Sign Up</button> <br><br>
                  
                
               </form>
                   </div>
               </div>
               
                  
       </section>          
        
          
<?php
         
    if(isset($_POST['signup']))
    {
       $count=0;
        $sql="SELECT username from user";
        $res=mysqli_query($db,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
         if($row['username']==$_POST['username']) 
         {
          $count=$count+1;   
         }
        }
        if($count==0)
        {
      mysqli_query($db,"INSERT INTO `user` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','user2.png');");  
  
   ?>
   <script type="text/javascript">
       alert("Registration Successfull");
    </script>
    <?php
        }
        else
        {
          ?>
   <script type="text/javascript">
       alert("The Username already taken!");
    </script>
    <?php   
            
            
        }
        
    }
    
    
      ?>
      
      
      
      
      <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>