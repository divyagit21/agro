<?php
?>
<html>

<head>

<style>

* {

  box-sizing: border-box;

}

 a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
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

}body, html {

  height: 100%;

  margin: 0;

}

 

.bg {

 

  background-image: url("backgroundcategory.jpg");

 

 

  height: 100%;

 

 

  background-position: center;

  background-repeat: no-repeat;

  background-size: cover;

}

</style>

</head>

<body style="padding:2px; background-color:pink;">
<center>
<h1 style="color:red; font-size:300%;">Select What You Want To Buy</h1>
</center>
<div class="bg"/>

   <div class="row">

  <div class="column">

<img src="fruits.jpg" style="width:90%; height:50%;"/></br>

 

<a href="<?php echo 'fruits.php'; ?>"><b style="color:blue; font-size:200%;">FRUITS</b></a>

</div>

<div class="column">

<img src="vegetables.jpg" style="width:90%; height:50%;"/></br>

<a href="<?php echo 'vegetables.php'; ?>"><b style="color:blue; font-size:200%;">VEGETABLES</b></a></br>

</div>

<div class="column">

<img src="pulses.jpg" style="width:90%; height:50%;"/></br>

<a href="<?php echo 'pulses.php'; ?>"><b style="color:blue; font-size:200%;">PULSES</b></a>

</div>

<div class="column">

<img src="dryfruits.jpg" style="width:90%; height:50%;"/></br>

<a href="<?php echo 'dryfruits.php'; ?>"><b style="color:blue; font-size:200%;">DRYFRUITS</b></a>

</div>

</div>

</body>

</html>

 