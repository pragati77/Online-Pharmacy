<?php
session_start();
// Include config file
require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p{
            background-color: #fff;
            background-color: rgba(255,255,255,0.5);
            margin-top: 50px;
            margin-bottom: 50px;
            margin-right: 50px;
            margin-left: 50px;
            font-style: oblique;
       
            }


body {
  font-family: "Lato", sans-serif;
}

.button {
  background-color: black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body style="background-image: url('chem.jpg');">

<div >
<div class="sidenav">
  <a href="explore.php">Explore</a>
  <a href="categorypharma.php">Category</a>
  <!--<a href="#">Search</a>-->
  <a href="contact.php">Contact</a>
</div>

<div class="main">

        <h2> welcome <?php echo $_SESSION["username"]; ?>  </h2>
        <footer>
        <a href = "logout.php"> logout </a>
        </footer>
        <center>
        <p> Explore the wide variety of medicines that are crafted with perfection.These medicines not only heal, but also 
         enhance the metabolism of the immune system. Our website contains the best handpicked medicines that support better
         living of life.
        </p>

        <button class="button button2" onclick="window.location.href='categorypharma.php'">Start Shopping</button>
        </center>


</div>
</div>
   
</body>
</html> 


