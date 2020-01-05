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
<div align = 'center' ><h2> Antipyretics </h2> </div>
<div>
<p>Antipyretics are substances that reduce fever. Antipyretics cause the hypothalamus to 
  override a prostaglandin-induced increase in temperature. 
  The body then works to lower the temperature, which results in a reduction in fever. </p>
</div>
<div align = 'center' ><h2> Analgesics </h2></div>
<div>
<p>Analgesic drugs act in various ways on the peripheral and central nervous systems.
   They are distinct from anesthetics, which temporarily affect, and in some instances completely 
   eliminate, sensation. Analgesics include paracetamol (known in North America as acetaminophen or 
   simply APAP), the nonsteroidal anti-inflammatory drugs (NSAIDs) such as the salicylates, and 
   opioid drugs such as morphine and oxycodone. </p></div>
   <div align = 'center' ><h2> Antibiotics </h2></div>
<div>
<p>An antibiotic is a type of antimicrobial substance active against bacteria and is the most 
  important type of antibacterial agent for fighting bacterial infections. Antibiotic medications 
  are widely used in the treatment and prevention of such infections. They may either kill or 
  inhibit the growth of bacteria. A limited number of antibiotics also possess antiprotozoal activity.
  Antibiotics are not effective against viruses such as the common cold or influenza; drugs which inhibit
   viruses are termed antiviral drugs or antivirals rather than antibiotics </p></div>
   <div align = 'center' ><h2> Antiseptics </h2></div>
   <div>
   <p> Antiseptocs are antimicrobial substances that are applied to living tissue/skin to reduce the
      possibility of infection, sepsis, or putrefaction. Antiseptics are generally distinguished from 
      antibiotics by the latter's ability to safely destroy bacteria within the body, and from
       disinfectants, which destroy microorganisms found on non-living objects. </P></div>
       <div align = 'center' ><h2> Sttimulants </h2></div>
</div>
<p>Stimulants (also often referred to as psychostimulants or colloquially as uppers) is an overarching
   term that covers many drugs including those that increase activity of the central nervous system and
    the body, drugs that are pleasurable and invigorating, or drugs that have sympathomimetic effects.
     Stimulants are widely used throughout the world as prescription medicines as well as without a 
    prescription (either legally or illicitly) as performance-enhancing or recreational drugs. The most 
    frequently prescribed stimulants as of 2013 were lisdexamfetamine, methylphenidate, and amphetamine.
     It is estimated that the percentage of the population that has abused amphetamine-type stimulants 
    (e.g., amphetamine, methamphetamine, MDMA, etc.) and cocaine combined[clarification needed] is 
    between 0.8% and 2.1%. </p></div>
    <div align = 'center' ><h2> Tranquilizers </h2></div>
  <div>
  <p>A tranquilizer refers to a drug which is designed for the treatment of anxiety, fear, tension,
     agitation, and disturbances of the mind,[2] specifically to reduce states of anxiety and tension.
     </p></div>
</body>
