<?php

// Include config file
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'pharmacy');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
session_start();

echo "entered";
$_cardname=$_POST['cardname'];
$_cardnumber=$_POST['cardnumber'];
$_exp=$_POST['date'];
$_cvv=$_POST['cvv'];


    $sql = "INSERT INTO `payment` ()
    VALUES ('$_cardname','$_cardnumber','$_exp','$_cvv')";

    $sql2 = "SELECT * FROM cart";
    $res = mysqli_query($connection, $sql2);

    

    

    if ($connection->query($sql) === TRUE) 
    {
        echo "payment done successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }


?>

<?php while($arr = mysqli_fetch_assoc($res)){ ?>
    
    
      
         <?php $_SESSION['p_id'] = $arr['prod_id'] ?>
          <p><?php echo $_SESSION['p_id'] ?></p>
          <?php $_id = $_SESSION['p_id'] ?>
          <?php $_name = $_SESSION['username'] ?>
          <?php $sql3  = "INSERT INTO `orders` ()
                         VALUES ('$_id','$_name')"; ?>
                         
        <?php if ($connection->query($sql3) === TRUE) 
        {
            echo "New record created successfully";
        } 
        ?>
          <p><?php //echo "quantity:". $arr['quantity'] ?></p>
         <!-- <form action="/insertquant.php?id2=<?php //echo $arr['prod_id'];?>" method="post">
          <p> CHANGE QUANTITY: <input type=text name="quantity" value="" required ></p>
          <div>
          <button class="button button2">save changes</button>
               
          </div>
			

          </form>
          
          <p><a href="delmed.php?id1=<?php// echo $arr['prod_id'];?>" class="btn btn-primary" role="button">remove</a></p>-->
          

                 
                 
           
    </div> 
<?php } ?>

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
<form action = "/categorypharma.php" method="post">

            <div align = "center">
            <h1>PAYMENT DONE SUCCESSFULLY</h1>
            <div>
            <div align = "center">
            <h1>THANKS FOR SHOPPING</h1>
            <div>
                <input type = "submit" value="SHOP AGAIN?">
            </div>
</form> 
<form action = "/logout.php" method="post">

            <div>
                <input type = "submit" value="log out">
            </div>
</form> 

</body>
</html>