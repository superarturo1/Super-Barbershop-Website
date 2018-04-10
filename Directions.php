<?php include "header.php"; ?>

<meta charset="UTF-8" />
<title>Directions</title> 
 <script src="JS/modernizr-1.5.js"></script>
 <script src="JS/Directions.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="JS/lettering.js"></script> 
  <link href="CSS/DirectionsStyles.css" rel="stylesheet" type="text/css" />
</head>


<h1 class="fancy_title">Get Directions</h1><br> 

<img id = "thisWayImage" src="Images/Thisway.jpg" alt="This Way" width = "730px" height = "250px" /><br>


<p>At Sam's Barber Shop, we are EXPERTS in ALL hair types.  Afros, Precision cuts for long straight hair, high & tight military cuts, great fades…..you name it, we can do it, with excellence.

We are located in the heart of Midtown Manhattan near E, F, R, M train stations.</p><br>



<form action="http://maps.google.com/maps" method="get" target="_blank"><br>
<h2>Enter your starting address below:</h2><br>
<input id ="saddr" type="text" name="saddr" />
<input type="hidden" name="daddr" value="[Your Business Address Here]" />
<input id ="GetDirections" type="submit" value="Get Directions" />

</form><br><br><br>
<!--<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class = "DirectionDog" src="Images/DirectionDog.jpg" alt="Direction Dog" width="200" height="250" align="left"  /> -->

</body>
<br><br><br><br>

<?php include "footer.php"; ?>



      
   <script>
$(document).ready(function() {
$(".fancy_title").lettering();
});
</script>     



    
