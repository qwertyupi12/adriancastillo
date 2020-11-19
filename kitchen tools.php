<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>


<style>

body{
  background-color: darkgray;
}
div.backBtn {
  width: 100px;
  left: 30px;
  top: 30px;
  background-color: #f4f4f4;
  transition: all 0.4s ease;
  position: fixed;
  cursor: pointer;
}

span.line {
  bottom: auto;
  right: auto;
  top: auto;
  left: auto;
  background-color: #333;
  border-radius: 10px;
  width: 100%;
  left: 0px;
  height: 2px;
  display: block;
  position: absolute;
  transition: width 0.2s ease 0.1s, left 0.2s ease, transform 0.2s ease 0.3s, background-color 0.2s ease;
}

span.tLine {
  top: 0px;
}

span.mLine {
  top: 13px;
  opacity: 0;
}

span.bLine {
  top: 26px;
}

.label {
  position: absolute;
  left: 0px;
  top: 5px;
  width: 100%;
  text-align: center;
  transition: all 0.4s ease;
  font-size: 1em;
}

div.backBtn:hover span.label {
  left: 25px
}

div.backBtn:hover span.line {
  left: -10px;
  height: 5px;
  background-color: #F76060;
}

div.backBtn:hover span.tLine {
  width: 25px;
  transform: rotate(-45deg);
  left: -15px;
  top: 6px;
}

div.backBtn:hover span.mLine {
  opacity: 1;
  width: 30px;
}

div.backBtn:hover span.bLine {
  width: 25px;
  transform: rotate(45deg);
  left: -15px;
  top: 20px;
}
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
 max-width: 550px;
    margin: auto;
    text-align: center;
}

.row {margin: 0 -5px;}


.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  margin: 55px 10px;
  text-align: center;
  background-color: #f1f1f1;
}
.button1 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="Front.php">Back</a></span>
      <span class="line bLine"></span>
</div>

<div class="row">
  <div class="column">
    <div class="card">
    <img src="6.jpg" height="400">
     </a>
      <h3>3pc Kitchen Knife & Sharpener Set</h3>
      <p><span>&#8369;</span>143.50</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="66.jpg" height="400">

      <h3>Stainless Steel Skimmer</h3>
      <p><span>&#8369;</span>57.00</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="666.jpg" height="400">

      <h3>4pcs Set Nylon Ladle</h3>
      <p><span>&#8369;</span>108.50</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="6666.jpg" height="400">

      <h3>Stainless Steel Can Opener</h3>
      <p><span>&#8369;</span>140.00</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="66666.jpg" height="400">
      <h3>28cm Colander</h3>
      <p><span>&#8369;</span>164.50</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>

  </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="666666.jpg" height="400">
      <h3>Stainless Steel Grater</h3>
      <p><span>&#8369;</span>70.00</p>
<a href="file:///C:/Users/Acer/Desktop/order%20system/checkout.html" class="button1">Add To Cart</a>
<div class="row">
<div class="col">
<div class="form-group mb-2">
    <label for="quantity" class="sr-only">Quantity</label>
    <select class="form-control qty" id="quantity" name="quantity">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
    </select>
    </div>
    </div>
  </div>
    </div>
  </div>
</div>

  
</body>
</html>