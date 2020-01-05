<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT price,quantity,SUM(quantity*price) as total FROM cart";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
//$row = mysqli_fetch_assoc($result); 

$sum = $row['total'];
//echo "total price:".$sum;
$conn->close();
?>
<html>
<head>

    <meta charset="UTF-8">
    <title align="center">checkout</title>
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
	    background-image: url("/carty.jpeg");
        }

        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid teal;
}

.button2:hover {
  background-color: teal;
  color: white;
}
    </style>

</head>
<body align="center">
<?php echo file_get_contents('topmenu.html'); ?>
<center>
<form action = "/medicart.php" method="post">
            <div>
            <h1> CHECKOUT </h1>
            </div>
            <div>
            <h3><?php echo "total price:".$sum ?></h3>
            
            </div>

            <div>
            <button class="button button2">Cart</button>
            </div>
</form> 
<form action = "/categorypharma.php" method="post">
            <div>
            <button class="button button2">shop more?</button>
            </div>
</form>
<form action = "/paypharma.php" method="post">
            <div>
            <button class="button button2">proceed to payment</button>
            </div>
</form>  
</center>
</body>
</html>

<!--<!DOCTYPE html>
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
	    background-image: url("/back.jpg");
        }
    </style>

 

</head>
<body>
    <div class="wrapper" align="center">
		<h1>
        <h2>PRODUCT ADDED TO CART</h2>
        <form action = "/cart.php" method="post">

            <div>
                <input type = "submit" value="VIEW CART">
            </div>
</form> 
        
        
    </div>    
</body>
</html>-->
