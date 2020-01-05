<?php
   
    session_start();
    echo $_SESSION['username'];
	
  

    require_once "connection.php"
?>


<?php   
   // echo "entered into cart adding";
    $_id = $_GET['id'];
    $_name = $_GET['name'];
    $_price = $_GET['price'];
   

   // echo $_id;
   // echo $_name;
   //echo $_price;

    $sql = "INSERT INTO `cart` ()
            SELECT prod_id,prod_name,price,quantity
            FROM products
            WHERE prod_id = $_id";
            

    if ($conn->query($sql) === TRUE) 
    {
        echo "inserted into cart successfully";
       
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
        <h2>PRODUCT ADDED TO CART</h2>
        <?php //echo $_SESSION['username']; ?>
        <form action = "/medicart.php" method="post">

            <div>
            <button class="button button2">CART</button>
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


