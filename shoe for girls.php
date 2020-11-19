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
  float: center;
  width: 70%;
  padding: 0 10px;
 max-width: 750px;
    margin: auto;
    text-align: center;
}

.row {margin: 0 -10px;}


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
       <a target="_blank" href="222.jpg">
    <img src="2.jpg" height="400">
    <img src="22.jpg" height="400">
     </a>
      <h3>Nike Air Max Up</h3>
      <p>nspired by the lifted look of the Air Max Dia, the Nike Air Max Up boosts you up above the noise. The colours are drawn from the signs and symbols of women's activist groups around the world. So go ahead and step up. The platform is yours.</p>
      <p><span>&#8369;</span>6,895.00</p>
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
      <a target="_blank" href="222222.jpg">
    <img src="2222.jpg" height="400">
    <img src="22222.jpg" height="400">
  </a>
      <h3>Nike Metcon 6</h3>
      <p>The most breathable version yet, the Nike Metcon 6 helps keep your foot cool when you're going full steam. It stands up to the push and pull of lifting and high-intensity workouts, delivering stability and durability.</p>
      <p><span>&#8369;</span>6,895.00</p>
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
<a target="_blank" href="22222222.jpg">
    <img src="2222222.jpg" height="400">
    <img src="222222222.jpg" height="400">
  </a>
      <h3>Nike RYZ 365</h3>
      <p>The Nike RYZ 365 is essentially the chunky sneaker replacement for the Tekno. It features bold line work on the upper, which adds a touch of irreverence, while geometric shapes in the midsole provide a cushioned foot fall.</p>
      <p><span>&#8369;</span>4,195.00</p>
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
<a target="_blank" href="222222222222.jpg">
    <img src="2222222222.jpg" height="400">
<img src="22222222222.jpg" height="400">
  </a>
      <h3>Nike Air Zoom Tempo NEXT%</h3>
      <p>The Nike Air Zoom Tempo NEXT% mixes durability with a design that helps push you towards your personal best. The result is a shoe built like a racer, but made for your everyday training routine.</p>
      <p><span>&#8369;</span>10,195.00</p>
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
<a target="_blank" href="222222222222222.jpg">
    <img src="2222222222222.jpg" height="400">
  <img src="22222222222222.jpg" height="400">
  </a>
      <h3>Nike Air Force 1 Shadow</h3>
      <p>The Nike Air Force 1 Shadow puts a playful twist on the classic b-ball design. Featuring a layered design, two times the branding and an exaggerated midsole, it highlights AF-1 styling and doubles the fun.</p>
      <p><span>&#8369;</span>5,895.00</p>
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
  
  <div class="column">
    <div class="card">
<a target="_blank" href="222222222222222222.jpg">
    <img src="2222222222222222.jpg" height="400">
<img src="22222222222222222.jpg" height="400">
  </a>
      <h3>Nike Air Force 1 '07</h3>
      <p>The radiance lives on in the Nike Air Force 1 '07, the b-ball OG that puts a fresh spin on what you know best: crisp leather, bold colours and the perfect amount of flash to make you shine.</p>
      <p><span>&#8369;</span>4,795</p>
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

  
</body>
</html>