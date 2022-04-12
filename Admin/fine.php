
<?php
    include"connection.php";
    include "navbar.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Fine Information</title>
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
            padding-left: 1100px;
        }

    </style>
</head>

<body class="parallax6">

    <div class="srch">
        <form name="submit" method="post">
            <div>
                <input name="search" class="searchbar" type="text" placeholder="Users Username" required="">
                <button name="submit" class="search-btn">Search</button>

            </div>
        </form>
    </div>
    <div>
        <h2>Users</h2>
    </div>



    <?php
      
    if(isset($_POST['submit']))
    {
     $q=mysqli_query($db,"SELECT * FROM `fine` where username like '%$_POST[search]%' ");
        
        if(mysqli_num_rows($q)==0)
        { 
          echo "Sorry!! No user found"; 
            
        }
        else
        {
           echo "<table class='table table-bordered table-hover'>";
           echo"<tr style='background-color:#b3e7de;'>";
    
              echo "<th>"; echo" Username"; echo"</th>";
              echo "<th>"; echo" Book Id"; echo"</th>";
              echo "<th>"; echo" Returned Date"; echo"</th>";
              echo "<th>"; echo" Day"; echo"</th>";
              echo "<th>"; echo" Fine"; echo"</th>";
              echo "<th>"; echo" Status"; echo"</th>";
    
           echo"</tr>";
    
          while($row=mysqli_fetch_assoc($q))
     {
       echo"<tr>";
           echo"<td>";echo $row['username'];echo"</td>";
           echo"<td>";echo $row['id'];echo"</td>";
           echo"<td>";echo $row['returned'];echo"</td>";
           echo"<td>" ;echo $row['day'];echo"</td>";
           echo"<td>";echo $row['fine'];echo"</td>";
            echo"<td>";echo $row['status'];echo"</td>";
       echo"</tr>";
        
    }
       echo"</table>";
            
        }
        
    }
    /*@@@@@@@  Exceptin handeling@@@@@@@@@@@*/
    else
    {
         $res=mysqli_query($db,"SELECT * FROM `fine`;");
           echo "<table class='table table-bordered table-hover'>";
           echo"<tr style='background-color:#b3e7de;'>";
    
              echo "<th>"; echo" Username"; echo"</th>";
              echo "<th>"; echo" Book Id"; echo"</th>";
              echo "<th>"; echo" Returned Date"; echo"</th>";
              echo "<th>"; echo" Day"; echo"</th>";
              echo "<th>"; echo" Fine"; echo"</th>";
              echo "<th>"; echo" Status"; echo"</th>";
    
           echo"</tr>";
    
          while($row=mysqli_fetch_assoc($res))
     {
       echo"<tr>";
           echo"<td>";echo $row['username'];echo"</td>";
           echo"<td>";echo $row['id'];echo"</td>";
           echo"<td>";echo $row['returned'];echo"</td>";
           echo"<td>" ;echo $row['day'];echo"</td>";
           echo"<td>";echo $row['fine'];echo"</td>";
            echo"<td>";echo $row['status'];echo"</td>";
       echo"</tr>";
        
    }
       echo"</table>";
        
    } 
    ?>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
