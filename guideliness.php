<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
<style>
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
body{
  margin-top: 120px;
  margin-bottom: 50px;
}
</style>
<body style="background-color:lightpink;">

<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="Front.php">Back</a></span>
      <span class="line bLine"></span>
</div>

<h1><tittle><div style="background-color:gray;color;white;padding:05px;">Guidelines</tittle></h1>

<h4>Think before you click:</h4>
<p>Fraudsters are fond of setting up fake e-commerce sites.<br> Prior to making a purchase, read reviews to hear what others say about the merchant.</br> In addition, look for a physical location and any customer service information.<br> Its also a good idea to call the merchant to confirm that they are legitimate.</br></p>
<h4>Consider your payment options:</h4>
<p>Using a credit card is much better than using a debit card;<br> there are more consumer protections for credit cards if something goes awry.</br> Or, you can use a third party payment service instead of your credit card.<br>There are many services you can use to pay for purchases  like Google Pay</br>  without giving the merchant your credit card information directly.</p>
<h4>Do your homework</h4>
<p>Fraudsters are fond of setting up fake e-commerce sites.<br> Prior to making a purchase, read reviews to hear what others say about the merchant.</br> In addition, look for a physical location and any customer service information.<br> Its also a good idea to call the merchant to confirm that they are legitimate.</br></p>

<h1><div style="background-color:gray;color;white;padding:05px;">How your Order Process</h1>
<img src="1.jpg" width="600" height="345">
</html>
</body>