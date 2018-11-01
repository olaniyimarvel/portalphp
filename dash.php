<?php
session_start();
include ('code.php');
if (isset($_SESSION['emailaddress']))
{
  $emailaddress=$_SESSION['emailaddress'];
  //$Password=$_SESSION['Password'];
  $message="";
  //echo $_SESSION['firstname'];
}else{
  header('location:portal.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
</head>
<body>
  <div class="sidenav">
    <a href="dash.php">Home</a>
    <a href="profile.php">Personal Profile</a>
    <a href="payment.php">Payment</a>
    <a href="history.php">Payment History</a>
    <a href="course.php">Course Registration</a>
    <a href="result.php">My Results</a>
    <a href="resetpassword.php">Reset Password</a>
  </div>
  <div class="main">
    <center> <h2>WELCOME!</h2></center>
    <h3>MAIN PAGE</h3>
    <div class="content">
    	<?php if (isset($_SESSION['firstname'])):?>
    		div class="error success">
    		<h3>
    			<?php
    			echo $_SESSION['firstname'];
    			unset($_SESSION['firstname']);
    			?>
    <div>
			<?php endif ?>
			<?php if (isset($_GET["firstname"])): ?>
				<p>Welcome <strong><?php echo $_GET['firstname']; ?></strong> </p>
			<?php endif ?>
		</div>
  </div>
</body>
</html>