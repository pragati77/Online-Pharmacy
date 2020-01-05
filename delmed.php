<?php 
    require_once "connection.php";
?>


<?php

 echo "entered into cart deleting";
 $h = $_GET['id1'];


// echo $_id;
// echo $_name;
//echo $_price;

 $sql = "DELETE FROM cart WHERE prod_id=$h";
         

 if ($conn->query($sql) === TRUE) 
 {
     echo "deleted from cart successfully";
 } 
 else 
 {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title align="center">removal</title>
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
<body>
<?php echo file_get_contents('topmenu.html'); ?>
    <div class="wrapper" align="center">
		<h1>
        <h2>PRODUCT REMOVED FROM CART</h2>
        <form action = "/medicart.php" method="post">

            <div>
            <button class="button button2">Cart</button>
            </div>
</form> 
<form action = "/categorypharma.php" method="post">

            <div>
            <button class="button button2">Continue Shopping</button>
            </div>
        </form> 
        
        
    </div>    
</body>
</html>
