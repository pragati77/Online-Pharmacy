<?php

 // Include config file
require_once "connection.php";

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 

?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  top : 200px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  top : 200px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0077b3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #66b3ff;
}

div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 50px;
        margin-bottom: 50px;
        margin-right: 50px;
        margin-left: 50px;
   
    }

body{
	    background-image: url("pills.jpg");
    }

</style>
<body>
<center>
<h1>LOGIN TO EXPLORE THE PEARLS OF MORTALITY</h1>
</center>

<div>
  <form action= "/logverip.php" method="POST">
    
    <label for="uname">USERNAME</label>
    <input type="text" id="uname" name="username"  value="" required>
    
    

    
    <label for="pass">PASSWORD</label>
    <input type="password" id="pass" name="password" value=""  required>
   
    

    <!--<label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="india">India</option>
      <option value="usa">USA</option>
    </select> -->
    
    <input type="submit"  value="LOGIN">
    

    <p>Don't have an account? <a href="registrationpharma.php">Sign up now</a>.</p>
  </form>
</div>

</body>
</html>
