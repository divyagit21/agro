<?php

?>

<html>

<head>

<style>

* {

  box-sizing: border-box;

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

 

  background-image:url("backgrounddryfruits.jpg");

 

 

  height: 100%;

 

 

  background-position: center;

  background-repeat: no-repeat;

  background-size: cover;

}

</style>

</head>

<body style="background-image:backgrounddryfruits.jpg">

  <form>

  <div class="bg"/>

   <div class="row">

  <div class="column">

    <img src="cashewnuts.jpg"  style="width:60% " >
	<p><b>Cashewnuts:VDBSS201</p>

<p style="color: black">Price:Rs.500</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

    <img src="pista.jpg" style="width:60% " >
	<p>Pista:VDBSS202</p>

<p style="color: black">Price:Rs.250</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

   

<img src="almonds.jpg" style="width:60% ">
<p>Almonds:VDBSS203</p>

<p style="color: black">Price:Rs.380</p>

<a href="addcart.php"><input type="button"  class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

 

  </div>

 

  <div class="column">

  <img src="drygrapes.jpg" style="width:60% ">
  <p> DryGrapes:VDBSS204</p>

<p style="color:black">Price:Rs.190</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

 

<div class="column">

<img src="pista.jpg" style="width:45% ">
<p>Pista:VDBSS205</p>

<p style="color: black">Price:Rs.285</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

  <img src="walnuts.jpg" style="width:60% ">
  <p>Walnuts:VDBSS206</p>

<p style="color:black">Price:Rs.755</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

 

 

   

</div>

   </form>

 </body>

 </html>

 