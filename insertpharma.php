<?php

// Include config file
require_once "connection.php";

echo "entered";
$_username=$_POST['username'];
$_password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];



    $sql = "INSERT INTO `login` ()
    VALUES ('$_username','$_password','$email','$address')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>

<html>
<head>
    <meta charset="UTF-8">
    <title align="center">Login</title>
    <style>
    div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 50px;
        margin-bottom: 50px;
        margin-right: 50px;
        margin-left: 50px;
   
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

        body {
	    background-image: url("pi.jpg");
         }

    </style>

 

</head>
<body>
<form action = "/loginpharma.php" method="post">
            
            <div>
                <center>
                <h1> Thank you for registering </h1>
                <input type = "submit" value="LOGIN">
                </center>
            </div>
</form> 
</body>
</html>