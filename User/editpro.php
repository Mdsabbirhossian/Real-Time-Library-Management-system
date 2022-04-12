<?php
    include"connection.php";
    include "navbar.php";
?>
 
  <!DOCTYPE html>
   <html>
    <head>
       <title>Edit Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style type="text/css">
      .search-btn
      {   
       margin-left:1200px;   
          
      }
      .wrapper
      {
       width: 1000px;
          height:500px;
          background-color:seashell;
          opacity:.8;
          color:gray;
          margin:30px auto;
          padding:20px;
          font-size:25px;
          text-align: center;
          
      }
  </style>   
</head>
<body class="parallax7">
             <h1 style="text-align: center;" >Edit Information</h1>
	<?php
		
		$sql = "SELECT * FROM user WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
			$username=$row['username'];
			$password=$row['password'];
			$email=$row['email'];
			$contact=$row['contact'];
		}

	?>
<!--<div class="regbox">
                  <form name="registration" action="" method="post" enctype="multipart/form-data" >
                  <input class="form-control" type="file" name="file" ><br><br>
                   <input class="form-control" type="text" name="first" placeholder="First Name" value=" <?php echo  $first; ?>"> <br><br>
                   <input class="form-control" type="text" name="last" placeholder="Last Name" value=" <?php echo $last; ?>"> <br><br>
                    <input class="form-control" type="text" name="username" placeholder="User Name" value=" <?php echo $username; ?>"> <br><br>
                   <input class="form-control" type="text" name="password" placeholder="Password" value=" <?php echo $password; ?>"> <br><br>
                   <input class="form-control" type="text" name="email" placeholder="Email" value=" <?php echo $email; ?>"> <br><br>
                   <input class="form-control" type="text" name="contact" placeholder="Phone" value=" <?php echo $contact; ?>"> <br><br>
                  <button name="submit">Edit</button> <br><br>
                  
                
               </form>
                   </div>  !-->
	
	<div class="regbox">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file"> <br><br>

		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>"> <br><br>

		
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>"> <br><br>

		
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>"> <br><br>

		
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>"> <br><br>

		
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>"> <br><br>

		
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>"> <br><br>

		<br>
		
			<button  type="submit" name="submit">save</button>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']);

			$first=$_POST['first'];
			$last=$_POST['last'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$picture=$_FILES['file']['name'];

			$sql1= "UPDATE user SET picture='$picture', first='$first', last='$last', username='$username', password='$password', email='$email', contact='$contact' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
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
       
    

    