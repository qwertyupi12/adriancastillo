<?php
// Initialize the session
session_start();

?>

<html>
    <head>
        <title>Bike shop</title>
    </head>
<style>
body {
  background-color: #fefbd8;
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
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 550px;
    margin: auto;
    text-align: center;
    font-family: Trebuche MS;
  }
  
  .price {
    color: black;
    font-size: 22px;
  }
  
  .card button {
    border: none;
    outline: 0;
    padding: 15px;
    color: gray;
    
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }
  
  .card button:hover {
    opacity: 5;
    background-color: black;
  }
.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 1.1em;
}
</style>
    <body>
	<script src="store.js" async></script>
<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="Front.php">Back</a></span>
      <span class="line bLine"></span>
</div>

            <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Giant Rincon 27.5</h1></br></span>
                    <img class="shop-item-image" src="rincon.jpg"  style="width:100%">
                    <div class="shop-item-details"> <p>This 2019 Giant Rincon is an entry-level mountain bike that has a solid yet lightweight frame made from ALLUX-grade aluminium material. First-timers who are up for some trail-riding action can also look into the Giant Rincon' 100mm Suntour XCT suspension fork, which helps to absorb shocks and bumps as you cycle on off-road terrains. Not to mention the glossy outlook of the bike which makes it all the more aesthetically pleasing. productnation</p>
                        <span class="shop-item-price"><span>&#8369;</span>22000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				
            <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Giant XTC Jr</h1></br></span>
                    <img class="shop-item-image" src="xtc.jpg" style="width:100%">
                    <div class="shop-item-details"><p>This Giant XTC Jr might fit the criteria. It boasts a solid frameset made from a lightweight yet durable ALLUX-grade aluminium alloy material. The Shimano RS35 twist shifter is specially designed for easy gear changing, making it ideal enough for casual riders.

Finally, the Giant XTC Jr's 20-inch tires are suitable enough for kids between seven and ten years of age. It's able to handle different terrains regardless of smooth, rough or uneven surfaces. productnation</p>
                        <span class="shop-item-price"><span>&#8369;</span>11000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				
				  <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Giant ATX 2</h1></br></span>
                    <img class="shop-item-image" src="atx.jpg"  style="width:100%">
                    <div class="shop-item-details">  <p>Here’s the thing about having disc brakes on a mountain bike: they are generally reliable in generating stopping power without the need of applying too much force on the lever. And of course, they are good for an all-weather ride even if you hit your brakes hard on a wet surface.

One of the best mountain bikes that offers superb disc brakes is the Giant ATX 2, which uses Tektro TKB-172 model. The frameset is both durable and lightweight, thanks to its ALLUX-grade aluminium alloy. Its 27.5” tires are ideal enough for riding on the likes of trails as well as downhills. productnation</p>
                        <span class="shop-item-price"><span>&#8369;</span>18000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				
				   <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Giant Talon4 GI 29er</h1></br></span>
                    <img class="shop-item-image" src="talon.jpg"  style="width:100%">
                    <div class="shop-item-details"><p>There are plenty of benefits when it comes to choosing a mountain bike with bigger wheel sizes. As in the case of Giant Talon 4 GI 29er (pronounced 'two-niners'), it comes equipped with 29-inch wheels that can deal with obstacles like roots and rocks. This also makes it an ideal bike for cross-country and trail riders.

Bigger wheels like the Giant Talon 4 GI 29er means that it fits well for larger guys and girls; they have better stability when you ride on smooth or rough terrains. productnation</p>
                        <span class="shop-item-price"><span>&#8369;</span>19000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				
  <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Giant Talon 1</h1></br></span>
                    <img class="shop-item-image" src="talon1.jpg"  style="width:100%">
                    <div class="shop-item-details">      <p>Built on a new lightweight ALUXX aluminum frame that features classic hardtail design plus the balanced riding characteristics of either larger diameter 29-inch or 27.5-inch wheels, Talon is a great choice for XC or light trail terrain. The frame geometry is specifically designed to adapt to its respective wheel size and either an 80mm or 100mm suspension fork (depending on frame size). It’s a confident ride that’s perfect for ambitious riders who want to take their off-road skills to the next level.</p>
                        <span class="shop-item-price"><span>&#8369;</span>19000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				
				<section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price"><span>&#8369;</span>0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
           
      
    </body>
</html>