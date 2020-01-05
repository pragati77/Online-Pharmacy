


<?php
session_start();
unset($_SESSION["username"]);
$_SESSION["loggedin"] = false;
//header("Location: loginpharma.php");



// Include config file
require_once "connection.php";

echo "entered";



    $sql = "DELETE FROM cart";
    

    if ($conn->query($sql) === TRUE) 
    {
        echo " items deleted successfully successfully";
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

        body{
	    background-image: url("/wel.jpg");
        }
    </style>

 

</head>
<body align="center">
<form action = "/loginpharma.php" method="post">

            <div align = "center">
            <h1>logged out</h1>
            <div>
            <div align =  "center">
            <h1>THANKS FOR SHOPPING</h1>
            <div>
                <input type = "submit" value="login">
            </div>
</form> 
<form action = "/startpharma.html" method="post">

            <div>
                <input type = "submit" value="home">
            </div>
</form> 

</body>
</html>