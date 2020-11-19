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
  max-width: 780px;
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
  padding: 20px;
  margin: 50px 20px;
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
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
body {
  font-family: 'Roboto', sans-serif;
}
</style>
<body>
<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
<span class="label"><a href="shoe for girls.php">For Women</a></span>
      <span class="line bLine"></span>
</div>

<div class="row">
  <div class="column">
    <div class="card">
       <a target="_blank" href="111111111.jpg">
    <img src="11.jpg" height="400">
    <img src="11111111.jpg" height="400">
 </a>
     </a>
      <h3>Nike Air Force 1 '07 Craft</h3>
      <p>The legend lives on in the Nike Air Force 1 '07 Craft—a modern take on the iconic AF-1 with new details like fresh graphics on the tongue and heel. Crisp leather, brushed suede and exposed stitching on the upper add texture and depth while the new plush liner feels soft and comfortable. Its redesigned shape returns to OG roots, adding heritage style.</p>
      <p><span>&#8369;</span>6,445.00</p>
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
  </div
</div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a target="_blank" href="11111111111.jpg">
    <img src="111.jpg" height="400">
<img src="1111111111.jpg" height="400">
  </a>
      <h3>Nike Blazer Low</h3>
      <p>The Nike Blazer Low refines the old-school basketball icon with smooth, genuine leather. Its classic, low-profile design takes cues from '70s-era heritage footwear while providing flexibility and traction for everyday wear.</p>
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
  </div
    </div>
  </div>
  </div>
  <div class="column">
    <div class="card">
<a target="_blank" href="11111111111111.jpg">
    <img src="1111.jpg" height="400">
<img src="1111111111111.jpg" height="400">
  </a>
      <h3>Nike Air Max 97 SE</h3>
      <p>The Nike Air Max 97 SE features the same ripple design as the OG, which was inspired by Japanese bullet trains. It takes the global influences a step further by proudly displaying the Nike Worldwide crest, which celebrates the unifying power of sport. Taking the revolutionary full-length Nike Air unit that shook up the running world and adding new flashy graphics inspired by sporting moments from around the globe, it lets you push your style full speed ahead.</p>
      <p><span>&#8369;</span>9,295.00</p>
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
  </div
    </div>
  </div>
</div>
  
  <div class="column">
    <div class="card">
<a target="_blank" href="1111111111111111.jpg">
    <img src="11111.jpg" height="400">
<img src="111111111111111.jpg" height="400">
  </a>
      <h3>Jordan Delta</h3>
      <p>The Jordan Delta has a design that's expressive and comfortable from the inside out. Made from a mix of materials, this shoe has plush, lightweight foam underfoot. It's meticulously crafted for a look and feel only Jordan Brand can deliver.</p>
      <p><span>&#8369;</span>10.000.00</p>
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
  </div
   </div>
     </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="111111.jpg" height="400">
  </a>
      <h3>Air Jordan 3 Retro SE</h3>
      <p>the Air Jordan 3 Retro SE uses genuine leather and premium textiles to recreate the classic. It features Air cushioning in the heel and forefoot, plus denim-like overlays embellished with the iconic elephant print.</p>
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
  </div
 

    </div>
  </div>
</div>


</body>
</html>