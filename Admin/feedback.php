<?php
    
    include"connection.php";
    include "navbar.php";
?>
 
  <!DOCTYPE html>
   <html>
    <head>
       <title>Feedback</title>
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
    .wrapper
      {
       width: 1000px;
          height:500px;
          background-color:black;
          opacity: .8;
          color:gray;
          margin:-20px auto;
          padding:10px;
          text-align: center;
          
      }
      .from-control
      {
       height:200px;
        width:70%;
          
      }
  </style>   
</head>
<body>
       <section>
               <div class="parallax5">
                   <div class="wrapper">
               <h1>Any suggesion or Question?</h1><hr>
               <form name="feback" action="" method="post" >
                    <input class="form-control" type="text" name="comment" placeholder="Write somethings.."><br><br>
                   <button class="feedback" name="feback">Comment</button>
                
               </form>
               </div>
               </div>
                
                 <div>
                    <?php
                     
                     
                     
                     
                     if(isset($_POST['feback']))
                     {
                       $sql= "INSERT INTO `comments` (`Comment`) VALUES ('',$_POST[Comment]');";  
                        if(mysqli_query($db,$sql))
                        {
                         $q="SELECT * FROM `comments` ORDER BY `Comment` DESC";
                         $res=mysqli_query($db,$q);
                             echo "<table class='table table-border'>";
                             while($row=mysqli_fetch_assoc($res))
                             {
                                 echo"<tr>";
                                 echo"<td>"; echo $row['Comment']; echo"</td>";
                                 echo"</tr>";
                                 
                             }
                            echo"</table>";
                        }
                         else
                         {
                         $q="SELECT * FROM `comments` ORDER BY `Comment` DESC";
                         $res=mysqli_query($db,$q);
                             echo "<table class='table table-border'>";
                             while($row=mysqli_fetch_assoc($res))
                             {
                                 echo"<tr>";
                                 echo"<td>"; echo $row ['Comment'];  echo"</td>";
                                 echo"</tr>";
                                 
                             }
                             echo"</table>";
                         }
                        }
                     
                     ?>
                     
                 </div>
                  
       </section> 
      <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>