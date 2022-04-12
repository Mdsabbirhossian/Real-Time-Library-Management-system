<?php
    include"connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Books</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        section {
            margin-top: -20px;
        }

        .searchbar {
            margin-left: 5px;
            height: 40px;
            width: 300px;
            border-radius: 10px;

        }

        .srch {
            padding-left: 1000px;
        }

        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            margin-top: 97px;
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

        .sabbir:hover {
            background-color: gray;

        }

        .wrapper {
            width: 1000px;
            height:600px;
            background-color:gray;
            opacity: .8;
            color: black;
            margin: -50px auto;
            padding: 5px;
            text-align: center;

        }

    </style>
</head>

<body class="parallax7">

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

        <div class="sabbir"> <a href="addbook.php">Add Book</a></div>
        <div class="sabbir"> <a href="deletebook.php">Delete Book</a></div>
         <div class="sab">  <a href="issuebook.php">Issue Book Information</a></div>
        <div class="sabbir"> <a href="contact.php">contact</a></div>
        <div class="sabbir"> <a href="logout.php">Logout</a></div>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

        <div class="wrapper">
            <h1>Add New Book</h1>

            <form name="" action="" method="post">

                <div class="addbook">
                    <input class="form-control" type="text" name="Id" placeholder="Book Id" required=""> <br>
                    <input class="form-control" type="text" name="Name" placeholder="Book Name" required=""> <br>
                    <input class="form-control" type="text" name="Authors" placeholder="Authors Name" required=""> <br>
                    <input class="form-control" type="text" name="Editions" placeholder="Book Editions" required=""> <br>
                    <input class="form-control" type="text" name="Status" placeholder="Status" required=""> <br>
                    <input class="form-control" type="text" name="Quantity" placeholder="Quantity" required=""> <br>
                    <input class="form-control" type="text" name="Category" placeholder="Category" required=""> 

                        <br> <button name="submit">Add</button>
                </div>

            </form>
        </div>
     <?php
        if(isset($_POST['submit']))
        {
              if(isset($_SESSION['login_user']))
                 {
                    mysqli_query($db,"INSERT INTO books VALUES ('$_POST[Id]','$_POST[Name]','$_POST[Authors]','$_POST[Editions]','$_POST[Status]','$_POST[Quantity]','$_POST[Category]','0'); ") ;  
               
                ?>
                    <script type="text/javascript">
              alert("Book Added successfully");
            </script>
                
                
                <?php
                 }
            else
              {
                
                ?>
                  <script type="text/javascript">
                   alert("You Must Login First");
                 </script>
                
                
                <?php
             }
        }
    ?>

    </div>
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









    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>





</body>

</html>
