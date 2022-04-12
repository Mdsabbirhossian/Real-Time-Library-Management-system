<?php
    include"connection.php";
    include "navbar.php";
?>
 
  <!DOCTYPE html>
   <html>
    <head>
       <title>User Information</title>
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
      .searchbar
      {
        margin-left:5px;
        height:40px;
        width:300px;
        border-radius: 10px;
          
      }
      .srch
      {
       padding-left:1000px;   
      }
      body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            margin-top:97px;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #222;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
      .sab:hover
        {
          background-color: #00544c;   
            
        }

  </style>   
</head>
<body class="parallax6">
  
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <li><a href="profile.php">
                        <?php
            
            if(isset($_SESSION['login_user']))
                  {
                   echo "<img class='img-circle profile_img' height=100 width=102 src='img/".$_SESSION['picture']."'>";
                   echo "</br>";
                   echo "</br>";
                   echo "Hello ". $_SESSION['login_user'];
                   echo "</br>";
                   ?>
                    </a></li>
            
                <?php  }
                
                 ?>
         <div class="sabbir"> <a href="adduser.php">Add User</a></div>
         <div class="sab"> <a href="deleteuser.php">Delete User</a></div>
         <div class="sab">  <a href="logout.php">Logout</a></div>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.body.style.backgroundColor = "white";
            }

        </script>
  
  
  
  
  
  
  
   
   <div class="srch" >
       <form name="submit" method="post">
       <div>
            <input name="search" class="searchbar" type="text"   placeholder="Search For user" required=""> 
            <button name="submit" class="search-btn">Search</button>
          
       </div>
    </form>
   </div>
    <div><h2>List of User</h2></div>
      
      
      
       <?php
      
    if(isset($_POST['submit']))
    {
     $q=mysqli_query($db," SELECT * FROM `user` WHERE Name like '%$_POST[search]%' ");
        
        if(mysqli_num_rows($q)==0)
        { 
          echo "Sorry!! No Book found"; 
            
        }
        else
        {
            echo "<table class='table table-bordered table-hover'>";
            echo"<tr style='background-color:#b3e7de;'>";
    
                    echo "<th>"; echo"First Name"; echo"</th>";
                    echo "<th>"; echo"Last Name"; echo"</th>";
                    echo "<th>"; echo"Username"; echo"</th>";
                    echo "<th>"; echo"Email"; echo"</th>";
                    echo "<th>"; echo"Contact"; echo"</th>";
    
            echo"</tr>";
    
        while($row=mysqli_fetch_assoc($q))
      {
             echo"<tr>";
                  echo"<td>";echo $row['first'];echo"</td>";
                  echo"<td>";echo $row['last'];echo"</td>";
                  echo"<td>";echo $row['username'];echo"</td>";
                  echo"<td>" ;echo $row['email'];echo"</td>";
                  echo"<td>";echo $row['contact'];echo"</td>";
               echo"</tr>";
        
    }
echo"</table>";
            
            
        }
        
    }
    /*@@@@@@@  Exceptin handeling@@@@@@@@@@@*/
    else
    {
    $res=mysqli_query($db,"SELECT * FROM `user` ORDER BY `user`.`username` ASC ;");
    echo "<table class='table table-bordered table-hover'>";
    echo"<tr style='background-color:#b3e7de;'>";
    
                     echo "<th>"; echo"First Name"; echo"</th>";
                    echo "<th>"; echo"Last Name"; echo"</th>";
                    echo "<th>"; echo"Username"; echo"</th>";
                    echo "<th>"; echo"Email"; echo"</th>";
                    echo "<th>"; echo"Contact"; echo"</th>";
    
    echo"</tr>";
    
    while($row=mysqli_fetch_assoc($res))
    {
     echo "<tr>";
				 echo"<td>";echo $row['first'];echo"</td>";
                  echo"<td>";echo $row['last'];echo"</td>";
                  echo"<td>";echo $row['username'];echo"</td>";
                  echo"<td>" ;echo $row['email'];echo"</td>";
                  echo"<td>";echo $row['contact'];echo"</td>";
    echo "</tr>";
           
    }
echo"</table>";
        
    } 
    ?>

</div>     
      <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
   
   
   
   
    </body>
</html>