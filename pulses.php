<?php

?>
<html>
<head>
<style>
* {

  box-sizing: border-box;

}

 p{
	 color:white;
 }

.column {position:relative; display:inline-block; width:30% max-width:240px; margin 10 auto; padding: 0px 10px 0px 10px;}

 

.row::after {

  content: "";

  clear: both;

  display: table;

}

img {

  border: 3px solid #555;

}

.button {

  background-color: red; /* Green */

  border: none;

  color: white;

  padding: 8px 10px;

  text-align: center;

  text-decoration: none;

  display: inline-block;

  font-size: 13px;

}

.button1:hover {

  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

  border-radius: 12px;

}

 

.button2:hover {

  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

 

}

body, html {

  height: 100%;

  margin: 0;

}

 

.bg {

 

  background-image: url("backgroundpulses.jpg");

 

 

  height: 100%;

 

 

  background-position: center;

  background-repeat: no-repeat;

  background-size: cover;

}

</style>

</head>

<body>

  <form>

  <div class="bg"/>

   <div class="row">

  <div class="column">

    <img src="split red lentils.jpg"  style="width:60% " >
	<p><b>Split Red Lentils:VDBSS301</p>
	
<p style="color: white">Price:Rs.70</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

    <img src="split brown lentils.jpg" style="width:60% " >
	<p>SplitBrownLentils:VDBSS302</p>

<p style="color: white">Price:Rs.65</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

   

<img src="chickpeas.jpg" style="width:60% ">
<p>Chickpeas:VDBSS303</p>

<p style="color: white">Price:Rs.80</p>

<a href="addcart.php"><input type="button"  class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

 

  </div>

 

  <div class="column">

  <img src="green.jpg" style="width:30% ">
	<p>Greens:VDBSS304</p>
<p style="color: white">Price:Rs.90</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

  <img src="drybeans.jpg" style="width:60% ">
	<p>DryBeans:VDBSS305</p>
<p style="color: white">Price:Rs.55</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

<img src="moongdal.jpg" style="width:45% ">
<p>Moongdal:VDBSS306</p>

<p style="color: white">Price:Rs.75</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

 

 

   

</div>

   </form>

 </body>

 </html>

