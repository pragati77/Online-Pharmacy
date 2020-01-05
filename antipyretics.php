<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pharmacy');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "SELECT * FROM products WHERE category_id=1";
$res = mysqli_query($connection, $sql);
?>



<?php while($r = mysqli_fetch_assoc($res)){ ?>
    <div class="col-sm-6 col-md-3" align="center">
      
          <h3><?php echo $r['prod_name'] ?></h3>
          <p><?php echo "price :".$r['price'] ?></p>
          <p><?php echo "quantity :".$r['quantity'] ?></p>
          <p><a href="addtocartm.php?id=<?php echo $r['prod_id'];?>&name=<?php echo $r['prod_name'];?>&price=<? echo $r['price']; ?>&qty=<? echo $r['quantity']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
    </div> 
<?php } ?>
<html>
<head>
    <meta charset="UTF-8">
    <title align="center">Antipyretics</title>
    <style>
    div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 70px;
        margin-bottom: 70px;
        margin-right: 70px;
        margin-left: 70px;
   
        }

        body{
	    background-image: url("green.jpeg");
        }
    </style>
<body>
<?php echo file_get_contents('topmenu.html'); ?>
</body>
</html>
