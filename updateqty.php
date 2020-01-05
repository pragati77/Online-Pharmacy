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
	    background-image: url("/back.jpg");
        }
    </style>

 

</head>
<body>
    <div class="wrapper" align="center">
		<h1>
        <h2>PRODUCT QUANTITY UPDATED TO CART</h2>
        <form action = "/medicart.php" method="post">

            <div>
                <input type = "submit" value="VIEW CART">
            </div>
        </form> 
        <form action = "/categorypharma.php" method="post">

            <div>
                <input type = "submit" value="CONTINUE SHOPPING">
            </div>
        </form> 
        
        
        
    </div>    
</body>
</html>






