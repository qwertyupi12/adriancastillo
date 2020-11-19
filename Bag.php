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
  width: 90%;
  padding: 0 10px;
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
.content-section {
    margin: 1em;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
}
.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}
.btn-header {
    margin: .5em 15% 2em 15%;
    color: white;
    border: 2px solid #2D9CDB;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 0;
    font-size: 1.5em;
    font-weight: lighter;
    padding-left: 2em;
    padding-right: 2em;
}

.btn-header:hover {
    background-color: rgba(255, 255, 255, .3);
}

.btn-play {
    display: block;
    margin: 0 auto;
    color: #2D9CDB;
    font-size: 4em;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding: 0;
    text-align: center;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #2D9CDB;
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

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: 1.75em;
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

<div class="row">
  <div class="column">
    <div class="card">
   <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>Herme's</h1></br></span>
                    <img class="shop-item-image" src="4444.jpg">
                    <div class="shop-item-details"><p>The increasing demand for this iconic Herme's trademark has become a symbol of class, wealth, and status. A Birkin's exterior is not only crafted from genuine crocodile leather, but also embellished with a diamond-studded clasp of 10-carat diamonds set on a bed made of white gold.</p>
                        <span class="shop-item-price"><span>&#8369;</span>432000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				</div>
				</div>

  <div class="column">
    <div class="card">
       <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>LOUIS VUITTON</h1></br></span>
                    <img class="shop-item-image" src="44444.jpg">
                    <div class="shop-item-details"><p>A timeless classic and totally worthy of its name, the Favorite can be worn three ways: as a clutch, slung crossbody with a long strap, or dangled from the wrist by its shorter chain.</p>
                        <span class="shop-item-price"><span>&#8369;</span>44100</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				</div>
  
  <div class="column">
    <div class="card">
 <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>SAINT LAURENT</h1></br></span>
                    <img class="shop-item-image" src="444444.jpg">
                    <div class="shop-item-details"><p>The fact that this shopper is likely going to be your new fave everyday bag is enough to yell "invest!" Roomy and soft, this unstructured tote has flat leather handles and an attached, removable zip wallet-pouch for optimal practicality. We're convinced.</p>
                        <span class="shop-item-price"><span>&#8369;</span>52800</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				</div>
  <div class="column">
    <div class="card">
<div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>FENDI</h1></br></span>
                    <img class="shop-item-image" src="444444444.jpg">
                    <div class="shop-item-details"><p>Color blocking and little studs create the Bag Bugs motif Fendi's become synonymous to in the last few years! This calfskin mini bag's flap and interior are set out like a wallet, with zippered and flat pockets plus six card slots ready for use. A long, detachable chain shoulder strap allows you to wear it hands-free, too!</p>
                        <span class="shop-item-price"><span>&#8369;</span>63200</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				</div>
  <div class="column">
    <div class="card">
   <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>BALENCIAGA</h1></br></span>
                    <img class="shop-item-image" src="44444444.jpg">
                    <div class="shop-item-details"> <p>There are other pouches with a price tag lower than this, but this small calfskin number is the most affordable Balenciaga bag with a strap currently available on the label's website! Living for that aged bordeaux hue.</p>
                        <span class="shop-item-price"><span>&#8369;</span>43000</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
				</div>
				</div>
				</div>

  <div class="column">
    <div class="card">
     <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title"></br><h1>GIVENCHY</h1></br></span>
                    <img class="shop-item-image" src="4444444.jpg">
                    <div class="shop-item-details"><p>The Horizon's iconic rectangular construction is characterized by its wide leather panel, interlacing the sides of the bag as an all-around belt accent that's detachable by snap buttons. Its spacious design features two round top handles, a detachable and adjustable shoulder strap, a front centre logo stamp, and purse feet. Another candidate for Most Dependable!</p>
                        <span class="shop-item-price"><span>&#8369;</span>73800</span></br>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
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