<?php
session_start();
	include('code.php');
	if (isset($_SESSION['emailaddress']))
{
  $emailaddress=$_SESSION['emailaddress'];
  //$Password=$_SESSION['Password'];
  $message="";
  //echo $_SESSION['firstname'];
}else{
  header('location:portal.php');
}



	if(isset($_POST['insert'])){

	  //echo "Loading Fine"
	  $password = $_POST['password'];
	  $confirmpassword = $_POST['confirmpassword'];


	  //$query
	  $pdoQuery = "UPDATE `userdata`( `password`, `confirmpassword`, ) VALUES ('$password', '$confirmpassword',)";
	  $pdoResult = $conn->query($pdoQuery);
	  $successmessage = $pdoResult -> rowCount ();
 	if ($successmessage > 0) 
    if ($password != $confirmpassword){
      echo "The passwords do not match";
    }else{
		echo "<script> alert (Password changed Successfully') ; </script>";
		}
		header ('location: dash.php');

		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- bootstrap  -->
  	<!-- END CSS -->
  	<!-- SCRIPT -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  	<!-- END SCRIPT -->

</head>
<header>
	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
 			<img src="MU_LOGO.png" alt="my logo" width=80 height=80 style="float:left";>
      		<a class="navbar-brand">MARVELOUS UNIVERSITY PORTAL</a>
      	</div>
      		<ul class="nav navbar-nav navbar-right">
    			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
			</ul>
  		</div>
</header>
<body>
<style type="text/css">
		body {
	    font-family: "Lato", sans-serif;
	}

	.sidenav {
	    height: 100%;
	    width: 160px;
	    position: fixed;
	    z-index: 1;
	    top: 1;
	    left: 0;
	    background-color: #111;
	    overflow-x: hidden;
	    padding-top: 20px;
	}

	.sidenav a {
	    padding: 6px 8px 6px 16px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	}

	.sidenav a:hover {
	    color: #f1f1f1;
	}

	.main {
	    margin-left: 160px; /* Same as the width of the sidenav */
	    font-size: 28px; /* Increased text to enable scrolling */
	    padding: 0px 10px;
	}

	@media screen and (max-height: 450px) {
	    .sidenav {padding-top: 15px;}
	    .sidenav a {font-size: 18px;}
	}

</style>
<body>
	<div class="sidenav">
	  <a href="dash.php">Home</a>
	  <a href="profile.php">Personal profile</a>
	  <a href="payment.php">Payment</a>
	  <a href="history.php">Payment History</a>
	  <a href="course.php">Course Registration</a>
	  <a href="result.php">My Results</a>
	  <a href="resetpassword.php">Reset Password</a>
	</div>
	<div class="main">
  		<center> <h2>WELCOME!</h2></center>
  		<center><p>RESET PASSWORD</p></center>
  	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-5">
				<div class= "form-group">
					<label for="psw">Old Password</label>
					<input type="password" class="form-control" id="password" required="" name="password">
				</div>
				<div class="form-group">
					<label for="psw">New Password</label>
					<input type="password" class="form-control" id="password" required="" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
				</div>
				<div class= "form-group">
					<label for="psw">Confirm Password</label>
					<input type="password" class="form-control"  id="password" required="" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
				<center>
					<a href="portal.php"> <span class="glyphicon glyphicon-log-in"></span> Submit </a>
				</center>
			</div>
		</div>
	</div>
</body>
</html>