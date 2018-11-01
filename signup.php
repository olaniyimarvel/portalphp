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
      $contactaddress = $_POST['contactaddress'];
      $phonenumber = $_POST['phonenumber'];
      $dateofbirth = $_POST['dateofbirth'];
      $courseofstudy = $_POST['courseofstudy'];
      $matricnumber = $_POST['matricnumber'];
      $level = $_POST['level'];
      $sex = $_POST['sex'];
      

    //$query
    $pdoQuery = "INSERT INTO `userdata`(`firstname`,`middlename`, `lastname`, `emailaddress`, `password`, `confirmpassword`, `contactaddress`, `phonenumber`, `dateofbirth`, `courseofstudy`, `matricnumber`, `level`, `sex`) VALUES ('$firstname', '$middlename', '$lastname', '$emailaddress', '$password', '$confirmpassword', '$contactaddress', '$phonenumber', '$dateofbirth', '$courseofstudy', '$matricnumber', '$level', '$sex')"; 
    $pdoResult = $conn->query($pdoQuery);
      $successmessage = $pdoResult -> rowCount ();
    if ($successmessage > 0) {
    if ($password != $confirmpassword){
        echo "The passwords do not match";
      }else{
        echo "<script> alert ('Data Submitted Successfully') </script>";
      }
        header ('location: portal.php');

      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student's Registration </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- bootstrap  -->
    <!-- END CSS -->
    <!-- SCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- JAVASCRIPT -->
<script type="text/javascript">
  // getting all input text objects
  var firstname=document.forms["signup"]["firstname"];
  var middlename=document.forms["signup"]["middlename"];
  var lastname=document.forms["signup"]["lastname"];
  var emailaddress=document.forms["signup"]["emailaddress"];
  var password=document.forms["signup"]["password"];
  var confirmpassword=document.forms["signup"]["confirmpassword"];
  var contactaddress=document.forms["signup"]["contactaddress"];
  var phonenumber=document.forms["signup"]["phonenumber"];
  var dateofbirth=document.forms["signup"]["dateofbirth"];
  var courseofstudy=document.forms["signup"]["courseofstudy"];
  var matricnumber=document.forms["signup"]["matricnumber"];
  var level=document.forms["signup"]["level"];
  var sex=document.forms["signup"]["sex"];

  //gettting errors display objects
  var firstname_error=document.getElementById("firstname_error");
  var middlename_error=document.getElementById("middlename_error");
  var lastname_error=document.getElementById("lastname_error");
  var emailaddress_error=document.getElementById("emailaddress_error");
  var password_error=document.getElementById("password_error");
  var confirmpassword_error=document.getElementById("confrimpassword_error");
  var contactaddress_error=document.getElementById("contactaddress_error");
  var phonenumber_error=document.getElementById("phonenumber_error");
  var dateofbirth_error=document.getElementById("dateofbirth_error");
  var courseofstudy_error=document.getElementById("courseofstudy_error");
  var matricnumber_error=document.getElementById("matricnumber_error");
  var level_error=document.getElementById("level_error");
  var sex_error=document.getElementById("sex_error");

//setting all eventlisteners
firstname.addEventlistener("blur", firstnameverify, true);
middlename.addEventlistener("blur", middlenameverify, true);
lastname.addEventlistener("blur", lastnameverify, true);
emailaddress.addEventlistener("blur", emailaddressverify, true);
password.addEventlistener("blur", passwordverify, true);
confirmpassword.addEventlistener("blur", confirmpasswordverify, true);
contactaddress.addEventlistener("blur", contactaddressverify, true);
phonenumber.addEventlistener("blur", phonenumberverify, true);
dateofbirth.addEventlistener("blur", dateofbirthverify, true);
courseofstudy.addEventlistener("blur", courseofstudyverify, true);
matricnumber.addEventlistener("blur", matricnumberverify, true);
level.addEventlistener("blur", levelverify, true);
sex.addEventlistener("blur", sexverify, true);

// validation function
function validate(){
  //firstname validation
  if (firstname.value=="") {
    firstname.style.border="1px solid red";
    firstname_error.textContent="first name is required";
    firstname focus ();
    return false;
  }
  //middlename validation
  if (middlename.value=="") {
    middlename.style.border="1px solid red";
    middlename_error.textContent="middle name is required";
    middlename focus ();
    return false;
  }
  //lastname validation
  if (lastname.value=="") {
    lastname.style.border="1px solid red";
    lastname_error.textContent="last name is required";
    lastname focus ();
    return false;
  }
  //emailaddress validation
  if (emailaddress.value=="") {
    emailaddress.style.border="1px solid red";
    emailaddress_error.textContent="Email Address is required";
    emailaddress focus ();
    return false;
  }
  //password validation
  if (password.value=="") {
    password.style.border="1px solid red";
    password_error.textContent="password is required";
    password focus ();
    return false;
  }
  //confirmpassword validation
  if (confirmpassword.value=="") {
    confirmpassword.style.border="1px solid red";
    confirm_error.textContent="confirm password is required";
    confirmpassword focus ();
    return false;
  }
  //contactaddress validation
  if (contactaddress.value=="") {
    contactaddress.style.border="1px solid red";
    contactaddress_error.textContent="contact address is required";
    contactaddress focus ();
    return false;
  }
  //phonenumber validation
  if (phonenumber.value=="") {
    phonenumber.style.border="1px solid red";
    phonenumber_error.textContent="phone number is required";
    phonenumber focus ();
    return false;
  }
  //dateofbirth validation
  if (dateofbirth.value=="") {
    dateofbirth.style.border="1px solid red";
    dateofbirth_error.textContent="date of birth is required";
    dateofbirth focus ();
    return false;
  }
  //courseofstudy validation
  if (courseofstudy.value=="") {
    courseofstudy.style.border="1px solid red";
    courseofstudy_error.textContent="course of study is required";
    courseofstudy focus ();
    return false;
  }
  //matricnumber validation
  if (matricnumber.value=="") {
    matricnumber.style.border="1px solid red";
    matricnumber_error.textContent="matric number is required";
    matricnumber focus ();
    return false;
  }
  //level validation
  if (level.value=="") {
    level.style.border="1px solid red";
    level_error.textContent="level is required";
    level focus ();
    return false;
  }
  //sex validation
  if (sex.value=="") {
    sex.style.border="1px solid red";
    sex_error.textContent="sex is required";
    sex focus ();
    return false;
  }
    // check if the two passwords match
  if (password.value!=confirmpassword.value) {
    password.style.border="1px solid red";
    confirmpassword.style.border="1px solid red"
    password_error.innerHTML="The two passwords do not match"
  }
}

//event handler function
function firstnameverify(){
  if (firstname.value !=""){
    firstname.style.border="1px solid 5E6E66";
    firstname_error.innerHTML="";
    return true;
  }
}
function middlenameverify(){
  if (middlename.value !=""){
    middlename.style.border="1px solid 5E6E66";
    middlename_error.innerHTML="";
    return true;
  }
}
function lastnameverify(){
  if (lastname.value !=""){
    lastname.style.border="1px solid 5E6E66";
    lastname_error.innerHTML="";
    return true;
  }
}
function emailaddressverify(){
  if (emailaddress.value !=""){
    emailaddress.style.border="1px solid 5E6E66";
    emailaddress_error.innerHTML="";
    return true;
  }
}
function passwordverify(){
  if (password.value !=""){
    password.style.border="1px solid 5E6E66";
    password_error.innerHTML="";
    return true;
  }
}
function confirmpasswordverify(){
  if (confirmpassword.value !=""){
    confirmpassword.style.border="1px solid 5E6E66";
    confirmpassword_error.innerHTML="";
    return true;
  }
}
function contactaddressverify(){
  if (contactaddress.value !=""){
    contactaddress.style.border="1px solid 5E6E66";
    contactaddress_error.innerHTML="";
    return true;
  }
}
function phonenumberverify(){
  if (phonenumber.value !=""){
    phonenumber.style.border="1px solid 5E6E66";
    phonenumber_error.innerHTML="";
    return true;
  }
}
function dateofbirthverify(){
  if (dateofbirth.value !=""){
    dateofbirth.style.border="1px solid 5E6E66";
    dateofbirth_error.innerHTML="";
    return true;
  }
}
function courseofstudyverify(){
  if (courseofstudy.value !=""){
    courseofstudy.style.border="1px solid 5E6E66";
    courseofstudy_error.innerHTML="";
    return true;
  }
}
function matricnumberverify(){
  if (matricnumber.value !=""){
    matricnumber.style.border="1px solid 5E6E66";
    matricnumber_error.innerHTML="";
    return true;
  }
}
function levelverify(){
  if (level.value !=""){
    level.style.border="1px solid 5E6E66";
    level_error.innerHTML="";
    return true;
  }
}
function sexverify(){
  if (sex.value !=""){
    sex.style.border="1px solid 5E6E66";
    sex_error.innerHTML="";
    return true;
  }
}

</script>



    <!-- END SCRIPT -->
<style type="text/css">
    /* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

    /* Style the submit button */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
    }

    /* Style the container for inputs */
    .container {
        background-color: #f1f1f1;
        padding: 10px;
    }

    /* The message box is shown when the user clicks on the password field */
    #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
    .val_error{
      color: #FF1F1F
    }
  </style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-5">
          <img src="MU_LOGO.png" alt="my logo" width=80 height=80 style="float:left";>
          <h2 class="text-center">MARVELOUS UNIVERSITY PORTAL</h2>
          <h3 class="text-center">STUDENT'S REGISTRATION</h3>
          <form action="signup.php" method="POST" onsubmit="return Validate()" name="signup">
          <div class= "form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" required="" name="firstname">
            <div id="firstname_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="middlename">Middle Name</label>
            <input type="text" class="form-control" id="middlename" required="" name="middlename">
            <div id="middlename_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" required="" name="lastname">
            <div id="lastname_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="emailaddress">Email Address</label>
            <input type="text" class="form-control" id="emailaddress" required="" name="emailaddress">
            <div id="emailaddress_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" required="" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
            <div id="password_error" class="val_error">
            <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              <!-- ADDING JAVASCRIPT -->
              <script type="text/javascript">
                var myInput = document.getElementById("psw");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");

                // When the user clicks on the password field, show the message box
                myInput.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }

                // When the user clicks outside of the password field, hide the message box
                myInput.onblur = function() {
                    document.getElementById("message").style.display = "none";
                }

                // When the user starts to type something inside the password field
                myInput.onkeyup = function() {
                  // Validate lowercase letters
                  var lowerCaseLetters = /[a-z]/g;
                  if(myInput.value.match(lowerCaseLetters)) {  
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                  } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                  }
                  
                  // Validate capital letters
                  var upperCaseLetters = /[A-Z]/g;
                  if(myInput.value.match(upperCaseLetters)) {  
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                  } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                  }

                  // Validate numbers
                  var numbers = /[0-9]/g;
                  if(myInput.value.match(numbers)) {  
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                  } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                  }
                  
                  // Validate length
                  if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }
              </script>
            </div>
          </div>
          <div class= "form-group">
            <label for="password">Confirm Password</label>
            <input type="password" class="form-control"  id="password" required="" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
            <div id="confirmpassword_error" class="val_error"></div>
            <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              <!-- ADDING JAVASCRIPT -->
              <script type="text/javascript">
                var myInput = document.getElementById("psw");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");

                // When the user clicks on the password field, show the message box
                myInput.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }

                // When the user clicks outside of the password field, hide the message box
                myInput.onblur = function() {
                    document.getElementById("message").style.display = "none";
                }

                // When the user starts to type something inside the password field
                myInput.onkeyup = function() {
                  // Validate lowercase letters
                  var lowerCaseLetters = /[a-z]/g;
                  if(myInput.value.match(lowerCaseLetters)) {  
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                  } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                  }
                  
                  // Validate capital letters
                  var upperCaseLetters = /[A-Z]/g;
                  if(myInput.value.match(upperCaseLetters)) {  
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                  } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                  }

                  // Validate numbers
                  var numbers = /[0-9]/g;
                  if(myInput.value.match(numbers)) {  
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                  } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                  }
                  
                  // Validate length
                  if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                  } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                  }
                }
              </script>
            </div>
          </div>
          <div class= "form-group">
            <label for="contactaddress">Contact Address</label>
            <input type="text" class="form-control" id="contactaddress" required="" name="contactaddress">
            <div id="contactaddress_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="text" class="form-control" id="phonenumber" required="" name="phonenumber">
            <div id="phonenumber_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="dateofbirth">Date of birth </label>
            <input type="text" class="form-control" id="dateofbirth" placeholder="yyyy-mm-dd" required="" name="dateofbirth"><br>
            <div id="dateofbirth_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="courseofstudy">Course of study</label>
            <input type="text" class="form-control" id="courseofstudy" required="" name="courseofstudy">
            <div id="courseofstudy_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="matricnumber">Matric Number</label>
            <input type="text" class="form-control" id="matricnumber" required="" name="matricnumber">
            <div id="matricnumber_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" required="" name="level">
            <div id="level_error" class="val_error"></div>
          </div>
          <div class= "form-group">
            <label for="sex">Gender  </label>
            <select class="form-control" name="sex" id="sex" required="" name="sex">
              <option value="">select gender</option>
                <?php              
                    $sql = "SELECT * FROM `gender` where status='1'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      echo "<option value='".$data['id']."'>".$data['sex']."</option>";
                  }
                ?> 
            </select>
            <div id="sex_error" class="val_error"></div>
          </div><br>
            <button type="submit" class= "btn btn-default" name="insert" id="insert">Sign up</button>
          </form>
        </div>
      </div>
    </div>
</body>
<footer>
  <center>copyrights 2018</center>
</footer>
</body>
</html>
