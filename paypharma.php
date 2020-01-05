<?php
// Include config file
require_once "connection.php";
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
        margin-top: 70px;
        margin-bottom: 70px;
        margin-right: 70px;
        margin-left: 70px;
   
        }

        body{
	    background-image: url("/cash.jpeg");
        
        }
        textarea {
         width: 402px;
                }
    </style>

 

</head>
<body>
    <div class="wrapper" align="center">
		<h1>
        <h2>PAYMENT</h2>
        <p>Please fill in the payment details.</p>
        <form action="/finalpay.php" method="post">
            <div >
                
               NAME ON CARD : <input type=text name="cardname" value="" required width:20px >
				
                
            </div>    
            <div>
                
               CARD NUMBER  : <input type=text name="cardnumber" value="" required>
			
            </div>
           
			<div>
                
              EXPIRY  DATE      :<input type="text" name="date" value="" required>
                
            </div>
			<div>
                
               CVV           : <input type="password" name="cvv" value="" required>
                
            </div>
           <!-- <div>
                
               DOB          : <input type="text" name="dob" value="" required>
                
            </div> -->
            <div>
                <input type=submit >
               
            </div>
			
            
        </form>
    </div>    
</body>
</html>
