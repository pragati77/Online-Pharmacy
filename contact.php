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
            div{
            background-color: #fff;
            background-color: rgba(255,255,255,0.5);
            margin-top: 50px;
            margin-bottom: 50px;
            margin-right: 50px;
            margin-left: 50px;
            font-style: oblique;
       
            }
            h2{
              
              
            }



body {

  font-family: "Lato", sans-serif;
  
	background-image: url("/carty.jpeg");
      
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
<body>


<?php echo file_get_contents('topmenu.html'); ?>
<div align = 'center' ><h2> Contact informtion: </h2> </div>
<h4> phone : 1400 3456 7890 </h4>
<h4> Email : pharma@gmail.com </h4>
<h4> Address : #505, silver oak industries,
     clemson street, San jose, California, USA. </h4>

</body>
