<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Expired Date Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		.srch
		{
			padding-left: 1000px;

		}
		
		body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
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
  color: white;
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
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
        .searchbar {
            padding-top:15px;
            margin-left: 5px;
            height: 40px;
            width: 300px;
            border-radius: 10px;

        }

        .srch {
            padding-left: 750px;
            padding-top:25px;
        }
        .rapper
      {
          background-color:gray;
          opacity: .8;
          color:black;
          text-align: center;
          
      }
    
	</style>

</head>
<body class="parallax8">
<!--_________________sidenav_______________-->
	
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
                   
                   
           <?php }
             ?>     
            </a></li>
  <div class="h"> <a href="book.php">Books</a></div>
  <div class="h"> <a href="request.php">Book Request</a></div>
  <div class="h"> <a href="issuebook.php">Issue Information</a></div>
  <div class="h"><a href="expired.php">Expired Information</a></div>
  <div class="h"><a href="fine.php">Fine</a></div>
  <div class="h">  <a href="logout.php">Logout</a></div>

</div>
<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<div class="container">


	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "300px";
	  document.getElementById("main").style.marginLeft = "300px";
	  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	  document.body.style.backgroundColor = "white";
	}
	</script>
	<div class="rapper">
     
      
     <?php
        if(isset($_SESSION['login_user']))
        {
          ?> 
          <form method="post" action="" >
          <div class="expired">
           <button  class="rtn-btn" type="submit" name="submit2" name="">Returned</button>
           <button  class="expired-btn" type="submit" name="submit3">Expired</button>
           </div>
           </form>
            
            
            
           <?php 
            $var=0;
          
          $result=mysqli_query($db,"SELECT * FROM `fine` where username='$_SESSION[login_user]' and status ='not paid' ;");
          while($r=mysqli_fetch_assoc($result))
          {
            $var=$var+$r['fine'];
              
          }
           $var1 = $var+ $_SESSION['fine'];
           ?>
            <h2>Your Fine is :
             <?php
                
                 echo " ".$var1;
             ?>
                 Taka <br><br><hr>
            </h2>
            
             <?php
            
        }
        
        
        ?>
    <!--  <h1>Information of Expired Date</h1><hr> !-->
      <?php
        
         if(isset($_SESSION['login_user']))
         {
             $ret='<p style="color: white; background-color:green;"> Returned </P>';
             $exp='<p style="color: white; background-color:red;"> Expired </P>'; 
             
             if(isset($_POST['submit2']))
             {
                 
               $sql="SELECT user.username,email,books.id,name,authors,editions,approve,issue,issue_book.return FROM user inner join issue_book ON user.username=issue_book.username inner join books ON issue_book.id=books.id WHERE issue_book.approve ='$ret' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC ";  
                $res= mysqli_query($db,$sql); 
                 
             }
             elseif (isset($_POST['submit3']))
             {
                 
                $sql="SELECT user.username,email,books.id,name,authors,editions,approve,issue,issue_book.return FROM user inner join issue_book ON user.username=issue_book.username inner join books ON issue_book.id=books.id WHERE issue_book.approve ='$exp' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC "; 
                 
                 $res= mysqli_query($db,$sql);
                 
                 
             }
             else
             {
              $sql="SELECT user.username,email,books.id,name,authors,editions,approve,issue,issue_book.return FROM user inner join issue_book ON user.username=issue_book.username inner join books ON issue_book.id=books.id WHERE issue_book.approve !=' ' and issue_book.approve !='Yes' and issue_book.username ='$_SESSION[login_user]' ORDER BY `issue_book`.`return` DESC ";    
                $res= mysqli_query($db,$sql); 
                 
                 
             }
             
             
             echo "<table class='table table-bordered table-hover'>";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "Username";  echo "</th>";
				echo "<th>"; echo "Email";  echo "</th>";
				echo "<th>"; echo "ID";  echo "</th>";
				echo "<th>"; echo "Book Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Approve Status";  echo "</th>";
				echo "<th>"; echo "Issue Date";  echo "</th>";
                echo "<th>"; echo "Return Date";  echo "</th>";
				
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
                
               
                
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['editions']; echo "</td>";
                echo "<td>"; echo $row['approve']; echo "</td>";
				echo "<td>"; echo $row['issue']; echo "</td>";
                echo "<td>"; echo $row['return']; echo "</td>";
				
				echo "</tr>";
			}
            
		echo "</table>";
             
             
         }
         else
	{
		?>
		<br>
			<h4 style="text-align: center;color: yellow;">You need to login to see the request.</h4>
			
		<?php
	}

        
        
        
        ?>
    </div>
	</div>
</div>
</body>
</html>