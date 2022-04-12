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
        body {
            background-image: url("img/chat.jpg");

             }
    </style>
</head>

<body>
    <?php
          $sql1= mysqli_query($db," SELECT user.Picture,text.username FROM user INNER JOIN text on user.username=text.username group by username ORDER BY status ;");
    
    ?>

    <div class="leftbox">
        <div class="leftbox1">
            <div>
                <form action=" " method="post" enctype="multipart/form-data">
                    <input class="textbar2" type="text" name="username" id="uname">
                    <button class="send-btn2" type="submit" name="submit">Show</button>


                </form>
            </div>
            <div class="list">
                <?php
                
                echo "<table id='table' class='table'>";
                  while($res1=mysqli_fetch_assoc($sql1))
                  {
                     echo "<tr>";
                               echo "<td width=60>";
                                      echo "<img class='img-circle profile_img' height=50 width=50 src='img/".$res1['Picture']."'>";
                               echo "</td>";
                     
                      echo "<td style='padding-top:15px;'>";  echo $res1['username']; echo "</td>";
                      
                     echo "</tr>";
                  }
                  
                echo "</table>";
               ?>

            </div>

        </div>
    </div>



    <div class="rightbox">
        <div class="rightbox1">
            <?php
              if(isset($_POST['submit']))
		      {
                  $res=mysqli_query($db,"SELECT * from text where username='$_POST[username]' ;");
                  mysqli_query($db,"UPDATE text SET status='yes' where sender='User' and username='$_POST[username]' ;");
                  
                  if($_POST['username'] != ''){$_SESSION['username']=$_POST['username'];}
                  
                 ?>
            <div class="rightbox2">
                <h3 style="margin-top: -2px; padding-top: 10px;"> <?php echo $_SESSION['username']?> </h3>

            </div>
            <!-------------text-------!-->
            <div class="msg">
                <br>
                <?php
            while($row=mysqli_fetch_assoc($res))
            {
               if($row['sender']=='User') 
               { 
          ?>
                <div class="chat user">
                    <div style="float: left; padding-top:8px;">
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
               else
               {
            ?>

                <div class="chat admin">
                    <div style="float: right; padding-top:18px;">
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
            }
            ?>


            </div>
            <div>

            </div>

            <div class="text1">
                <form action=" " method="post">
                    <div>
                        <input name="text" class="textbar" type="text" placeholder="Send Text..." required>
                        <button name="submit1" type="submit" class="send-btn"><span class="glyphicon glyphicon-send"></span>&nbsp; Send</button>

                    </div>
                </form>
            </div>

            <?php      
              }
            
             /*--------------not submited-----------*/
            
            else
            {
              if($_SESSION['username']=='')
                {
                ?>
            <img style=" width:300px;height:200px;border-radius: 50%;" src="img/waiting.gif" alt="animated">
            
            <?php
                }
            else
            {
                if(isset($_POST['submit1']))
                {
                    mysqli_query($db," INSERT into `library`.`text` VALUES ('','$_SESSION[username]','$_POST[text]','no','Admin') ;");
                   
                    $res=mysqli_query($db,"SELECT * from text where username='$_SESSION[username]' ;");  
               
                }
                else
                {
                  $res=mysqli_query($db,"SELECT * from text where username='$_SESSION[username]' ;");    
                    
                }
                ?>
            <div class="rightbox2">
                <h3 style="margin-top: -2px; padding-top: 10px;"> <?php echo $_SESSION['username']?> </h3>

            </div>
            <div class="msg">
                <br>
                <?php
            while($row=mysqli_fetch_assoc($res))
            {
               if($row['sender']=='User') 
               { 
          ?>
                <div class="chat user">
                    <div style="float: left; padding-top:8px;">
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
               else
               {
            ?>

                <div class="chat admin">
                    <div style="float: right; padding-top:18px;">
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
            }
            ?>


            </div>
            <div class="text1">
                <form action=" " method="post">
                    <div>
                        <input name="text" class="textbar" type="text" placeholder="Send Text..." required>
                        <button name="submit1" type="submit" class="send-btn"><span class="glyphicon glyphicon-send"></span>&nbsp; Send</button>

                    </div>
                </form>



            </div>


            <?php
            }
                
                
            }
               ?>

        </div>
    </div>
    <script>
        var table = document.getElementById('table'),
            eIndex;
        for (var i = 0; i < table.rows.length; i++) {

            table.rows[i].onclick = function() {
                rIndex = this.rowIndex;
                document.getElementById("uname").value = this.cells[1].innerHTML;
            }

        }

    </script>



</body>


</html>
