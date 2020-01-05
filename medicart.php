
<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pharmacy');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "SELECT * FROM cart";
$res = mysqli_query($connection, $sql);
?>

<div class="wrapper" align="center">
		
        <h2>CART</h2>
        
        
        
</div>


<?php while($arr = mysqli_fetch_assoc($res)){ ?>
    
    <div class="col-sm-6 col-md-3" align="center">
      
          <h3><?php echo $arr['prod_name'] ?></h3>
          <p><?php echo "price:". $arr['price'] ?></p>
          <p><?php echo "quantity:". $arr['quantity'] ?></p>
          <form action="/insertquantmedi.php?id2=<?php echo $arr['prod_id'];?>" method="post">
          <p> CHANGE QUANTITY: <input type=text name="quantity" value="" required ></p>
          <div>
          <button class="button button2">save changes</button>
               
          </div>
			

          </form>
          
          <p><a href="delmed.php?id1=<?php echo $arr['prod_id'];?>" class="btn btn-primary" role="button">remove</a></p>
          

                 
                 
           
    </div> 
<?php } ?>


<html>
<head>
    <meta charset="UTF-8">
    <title align="center">CARTO</title>
    <style>
    div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 60px;
        margin-bottom: 60px;
        margin-right: 60px;
        margin-left: 60px;
   
        }

        body{
	    background-image: url("/pilo.jpeg");
        }

  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
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
        }
    </style>

 

</head>
<body align="center">
<?php echo file_get_contents('topmenu.html'); ?>
<center>
<form action = "/categorypharma.php" method="post">
            
            <button class="button button2">Continue Shopping</button>
            
</form> 
<form action = "/checkoutmedi.php" method="post">
            
            <button class="button button2">checkout</button>
            
</form> 
    </center>
</body>
</html>
