<?php
session_start();
    require('code.php');
if (isset($_SESSION['emailaddress']))
{
  $emailaddress=$_SESSION['emailaddress'];
  //$Password=$_SESSION['Password'];
  $message="";
  //echo $_SESSION['firstname'];
      $sql = ("SELECT * FROM userdata");
      $stmt = $conn->prepare($sql);
      $stmt->execute();
}else{
  header('location:portal.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
  <meta charset="utf-8">
    <!-- CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        </div>
      </div>
  </header>
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
      <center><p>Still Processing... This might take a while!</p></center>
  
    </div>



    <?php
        require "code.php";
    ?>
    <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      }
    ?>
        <center>
          echo "<table>";
          echo "
          <tr bgcolor='#f1f1f1'><td><b>First Name</b></td><td>$row->firstname</td></tr>
          <tr><td><b>Middle Name</b></td><td>$row->middlename</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>last Name</b></td><td>$row->lastname</td></tr>
          <tr><td><b>Email Address</b></td><td>$row->emailaddress</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>Password</b></td><td>$row->password</td></tr>
          <tr><td><b>Confirm password</b></td><td>$row->confrimpassword</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>Contact Address</b></td><td>$row->contactaddress</td></tr>
          <tr><td><b>Phone Number</b></td><td>$row->phonenumber</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>Date Of Birth</b></td><td>$row->dateofbirth</td></tr>
          <tr><td><b>Course Of Study</b></td><td>$row->courseofstudy</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>Matric Number</b></td><td>$row->matricnumber</td></tr>
          <tr><td><b>Level</b></td><td>$row->level</td></tr>
          <tr bgcolor='#f1f1f1'><td><b>Gender</b></td><td>$row->sex</td></tr>
          ";
          echo "</table>;
        </center>
</body>
</html>