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

 

  background-image: url("backgroundvegetables.jpg");

 

 

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

    <img src="ladiesfinger.jpg"  style="width:80%; height:30%; " >
	<p><b>Ladies Finger:VDBSS101</p>

<p>Price:Rs.40</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

    <img src="potato.jpg" style="width:80%; height:30%; " >
	<p>Potato:VDBSS102</p>

<p>Price:Rs.35</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

  </div>

  <div class="column">

   

<img src="radish.jpg" style="width:80%; height:30%;">
<p>Radish:VDBSS103</p>

<p>Price:Rs.30</p>

<a href="addcart.php"><input type="button"  class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

 

  </div>

 

  <div class="column">

  <img src="califlower.jpg" style="width:80%; height:30%; ">
  <p>Califlower:VDBSS104</p>

<p>Price:Rs.30</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

  <img src="tomatoes.jpg" style="width:90%; height:30%; ">
  <p>Tomato:VDBSS105</p>

<p>Price:Rs.45</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>

<div class="column">

<img src="capsicum.jpg" style="width:90%; height:30%; ">
<p>Capsicum:VDBSS106</p>

<p>Price:Rs.50</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>
<div class="column">

<img src="brinjals.jpg" style="width:90%; height:30%; ">
<p>Brinjal:VDBSS107</p>

<p>Price:Rs.50</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>
<div class="column">

<img src="carrots.jpg" style="width:90%; height:30%; ">
<p>Carrot:VDBSS108</p>

<p>Price:Rs.50</p>

<a href="addcart.php"><input type="button" class="button button1" name="Add to cart" value="Add to cart" style="border-radius: 12px"/></a>

<a href="buynow.php"><input type="button" class="button button2" name="Buy now" value="Buy now" style="border-radius: 12px"/></a>

</div>
 

 

   

</div>

   </form>

 </body>

 </html>