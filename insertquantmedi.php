<?php
   

/*	session_start();
	
    if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        $items .= "," . $_GET['prod_id'];
        $_SESSION['cart'] = $items;
        header('location: rett.php?status=success');
    }else{
        $items = $_GET['prod_id'];
        $_SESSION['cart'] = $items;
        header('location: rett.php?status=success');
    }
*/

    require_once "connection.php"
?>


<?php   
   // echo "entered into cart adding";
    $_id = $_GET['id2'];
  //  $_name = $_GET['name'];
   // $_price = $_GET['price'];
    $_quantity = $_POST['quantity'];
   

   // echo $_id;
   // echo $_name;
   //echo $_price;

    $sql = "UPDATE cart
            SET quantity=$_quantity
            WHERE prod_id = $_id";
            

    if ($conn->query($sql) === TRUE) 
    {
        echo "updated into cart successfully";
       
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
    <div class="wrapper" align="center">
		<h1>
        <h2>PRODUCT QUANTITY UPDATED TO CART</h2>
        <form action = "/medicart.php" method="post">

            <div>
            <button class="button button2">CART</button>
            </div>
        </form> 
        <form action = "/categorypharma.php" method="post">

            <div>
            <button class="button button2">Continue shopping</button>
            </div>
        </form> 
        
        
        
    </div>    
</body>
</html>






