
<?php
// Include config file
require_once "connection.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <link rel="stylesheet" href="theme.css">
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
	        background-image: url("cat.jpeg");
            }
            h4{
             display: inline;
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
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid teal;
}

.button3:hover {
  background-color: teal;
  color: white;
}
}
    </style>
    
</head>
<body >
<?php echo file_get_contents('topmenu.html'); ?>
    <div class="wrapper" align="center">
        <h2>One click for a healthier living</h2>
        <p>Shop by category </p>
        <form action = "/antipyretics.php" method="post">
            <div>
                
               
                <button type = "submit" class="button button3">Antipyretics</button>

             </div>
        </form>    
        <form action = "/analgesics.php" method="post">
            <div>
                
                <button type = "submit" class="button button3">Analgesics</button>
               
            </div>
        </form> 
        <form action = "/Antibiotics.php" method="post">
            <div>
            <button type = "submit" class="button button3">Antibiotics</button>
               
            </div>
        </form> 
        <form action = "/antiseptics.php" method="post">
            <div>
            <button type = "submit" class="button button3">Antiseptics</button>
                
            </div>
        </form>
        <form action = "/stimulants.php" method="post">
            <div>
            <button type = "submit" class="button button3">Stimulants</button>
                
            </div>
        </form>   
        <form action = "/tranquilizers.php" method="post">
            <div>
            <button type = "submit" class="button button3">Tranquilizers</button>
                
            </div>
        </form>   
			
			
			
            
        </form>
        
    </div>    
    <form action = "/medicart.php" method="post">

            <div align="center">
                <input type = "submit" value="view cart">
            </div>
</form> 
</body>
</html>