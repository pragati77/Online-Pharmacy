<?php

require_once "connection.php";

// Initialize the session
session_start();
 




if (isset($_POST['username'])) 
{
    $uname = $_POST['username'];
}
if (isset($_POST['password'])) 
{
    $psw = $_POST['password'];
}


$sql = "SELECT username,password FROM login where username='$uname' and password='$psw'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    echo "successful login";

    session_start();

      // Store data in session variables
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $uname;

      header("location: welcome.php");

    
    
}
else 
{
    echo '<script language="javascript">';
    echo 'alert("incorrect username or password !")';
    echo '</script>';
    
    
}
$conn->close();
?>
<!--<html>
    <body>
        <div>
        <p> welcome </p>
        
        
        </div>
    </body>
</html> -->