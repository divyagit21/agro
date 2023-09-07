<?php

?>

<html>

<head>

<style>

* {

  box-sizing: border-box;

}

 

.column {

  float: left;

  width: 23.33%;

  padding: 0px;

  margin:0px;

}

.row::after {

  content: "";

  clear: both;

  display: table;

}

img {

  border: 5px solid #555;

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

 

  background-image: url("backgroundfruits.jpg");

 

 

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

    <img src="straw.jpg" style="width:50%; height:30%;">
	<p><b>StrawBerry:VDBSS001</p>

<p>Price:Rs.110</p>

<a href="addcart.php"><input type="button"  class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

    <img src="apple.jpg"  style="width:50%; height:30%;">
	<p>Apple:VDBSS002</p>

<p>Price:Rs.90</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

   

<img src="banana.jpg" style="width:50%; height:30%;">
<p>Banana:VDBSS003</p>
<p>Price:Rs.40</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

 

  </div>

  <div class="column">

  <img src="pineapple.jpg"  style="width:50%; height:30%;">
	<p>Pine Apple:VDBSS004</p>
<p>Price:Rs.100</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

  <img src="kiwi.jpg"  style="width:50%; height:30%;">
<p>Kiwi:VDBSS005</p>
<p>Price:Rs.100</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

 

  <div class="column">

  <img src="guava.jpg"  style="width:50%; height:30%;">
<p>Guava:VDBSS006</p>
<p>Price:Rs.40</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

 

<div class="column">

<img src="mangos.jpg"  style="width:50%; height:30%;">
<p>Mango:VDBSS007</p>
<p>Price:Rs.80</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>
<div class="column">

<img src="grapes.jpg"  style="width:50%; height:30%;">
<p><b>Grapes:VDBSS008</b></p>
<p>Price:Rs.80</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

</div>

 

   </form>

 </body>

 </html>

