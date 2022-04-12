<?php
    include"connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Massege</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body
    {
       background-image: url("img/chat.png");
       
    }
    .msg
    {
     height:450px;
     overflow-y: scroll;
     background-color:lightgray;
   
       
        
        
    }
    .text1
    {
     margin-top: 5px;
     margin-left: 5px;
        
        
    }
   .user .textbox
    {
      height:60px;
     width: 400px;
     background-color:red;
        padding: 13px 25px;
     color:white;
     border-radius: 20px; 
        order: -1;
        margin-left:25px;
        margin-top: 5px;
        
        
    }
    .admin .textbox
    {
      height:60px;
     width: 400px;
     background-color:seashell;
        padding: 13px 10px;
        margin-top: 10px;
     color:black;
     border-radius: 20px; 
        
        
        
    }
    .textbar
    {
     height:60px;
     width: 350px;
     background-color:black;
     color:white;
     border-radius: 20px;  
        
    }
    .chatbox
    {
     height:600px;
     width: 500px;
     background-color:lightgray;
     opacity: .9;
     color: black;
    margin: -20px auto;
     border-radius: 20px;

    }
    .header
    {
     height:80px;
      width: 100%;
      background-color:seashell;  
      text-align: center;
      color:black;
        border-radius: 20px;
        padding-top:2px;
        
    }
    img{ marging-top:2px;}
    .chat
    {
      display: flex;
        flex-flow: row wrap;
        
    }
</style>
</head>
<body>  
   
   <?php
    if(isset($_POST['submit']))
    {
     mysqli_query($db," INSERT into `library`.`text` VALUES ('','$_SESSION[login_user]','$_POST[text]','no','User') ;");
     $res=mysqli_query($db," SELECT * FROM `text` WHERE username ='$_SESSION[login_user]' ; "); 
            
    }
    else
    {
      $res=mysqli_query($db," SELECT * FROM `text` WHERE username ='$_SESSION[login_user]' ; ");  
        
        
    }
    mysqli_query($db," UPDATE `text` set status='yes' WHERE sender='Admin' and username='$_SESSION[login_user]' ; ");
    
    ?>
  
 
  <div class="chatbox">
      <div class="header">
         <h1>Admin</h1>
          
      </div>
      <div class="msg">
         <br>
        <?php
            while($row=mysqli_fetch_assoc($res))
            {
               if($row['sender']=='User') 
               {
          
          ?>
         <!-----User-----!-->
          <!-----User-----!-->
           <!-----User-----!-->
         <div class="chat user">
            <div style="float: right; padding-top:8px;">
                   <?php
                   echo "<img class='img-circle profile_img' height=40 width=43 src='img/".$_SESSION['picture']."'>";
                   
                   ?>
                
            </div>
             <div style="float:right;" class="textbox">
                
                <?php
                
                   echo $row['text'];
                
                 ?>
             </div>
         </div>
          <?php
               }
               else
               {
            ?>
          <!-----admin-----!-->
           <!-----admin-----!-->
            <!-----admin-----!-->
         <div class="chat admin">
            <div style="float: left; padding-top:18px;">
                   <img class='img-circle profile_img' height=40 width=42 src="img/user1.png">
                   
                 
                
            </div>
             <div style="float:left;" class="textbox">
                
                
                
                 <?php
                
                   echo $row['text'];
                
                 ?>
                
                
                 
             </div>
         </div>
         <?php
            }
            }
            ?>
          
          
      </div>
      <div>
          <div class="text1">
            <form action=" " method="post">
                <div>
                    <input name="text" class="textbar" type="text" placeholder="Send Text..." required>
                    <button name="submit" type="submit" class="send-btn"><span class="glyphicon glyphicon-send"></span>&nbsp; Send</button>

                </div>
            </form>
        </div>
      </div>
      
  </div>

   
</body>


</html>