<?php
include('code.php');
if(isset($_POST['insert']))
{

  //echo "Loading Fine";
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
?>