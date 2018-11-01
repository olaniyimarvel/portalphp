<?php
    session_start();
    require "code.php";

    $message = " ";

    if(isset($_POST['login'])){
        $emailaddress = trim($_POST['emailaddress']);
        $password = $_POST['password'];
        

        // if(empty($emailaddress) || empty($password)) {
        //     $message = "emailaddress/Password can't be empty";
        // }else {
            $sql = "SELECT emailaddress, password FROM userdata WHERE emailaddress=? AND password=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($emailaddress,$password));

            //$row = $query->fetch(PDO::FETCH_ASSOC);
            //echo ($row['password']);
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if($query->rowCount() >= 1) {
                extract($row);
                    
                    // if(($emailaddress == $row['emailaddress']) & ($password == $row['password'])) {
                         $_SESSION['emailaddress'] = $emailaddress;
                         //$_SESSION['firstname'] = $firstname;
                         $_SESSION['time_start_login'] = time(); 
                         header("location:dash.php"); 
                    } //end of query row count
                else
                    {
                        $message = '<p style="color:red; font-size:20px; text-align:center;">Username/Password is wrong';
                    } //end of if else
                
            } 
        
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Marvelous university </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/portal.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- END CSS -->

    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- END SCRIPT -->
</head>
<body>
	<header>
        <img src="images/MU_LOGO.png" alt="my logo" width=180 height=100 style="float:left">
    
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>

        <center><h1> MARVELOUS UNIVERSITY </h1></center>
        <h3>Welcome to marvelous university web portal</h3>
    </header>

    <article>
        <div class="container loginbox">
            <div class="row">
                <div class="col-md-offset-3 col-md-4">
                    <center><h1>LOGIN</h1></center>
                    <?php  echo $message;  ?>
                    <form action="" method="POST">
                        <div class= "form-group">
                            <i class="fa fa-envelope icon"></i>
                            <label for="emailaddress">Email Address</label>
                            <input type="text" class="form-control"  id="emailaddress" placeholder="Email Address" required="" name="emailaddress">
                        </div>
                        <div class= "form-group">
                            <i class="fa fa-key icon"></i>
                            <label for="password">password</label>
                            <input type="password" class="form-control" value="" id="password" placeholder="password" required="" name="password">
                        </div>
                        <center>
                            <button type="submit" name="login"><span class="glyphicon glyphicon-log-in"></span> Login </button> 
                        </center>
                        <span>
                        
                        </span>
                        <footer>
                            copyrights 2018
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </article>
</body>
</html>