<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<style>

.button {
  display: inline-flex;
  height: 80px;
  width: 180px;
  border: 3px solid gray;
  margin: 20px 20px 20px;
  color: gray;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

a {
  color: black;
  text-decoration: none;
  letter-spacing: 3px;
}
#QWE {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  margin: 100px 10px 0px;
  left: 5%;
}

#QWE a {
  position: relative;
  transition: all .45s ease-Out;
}

#AC {
  width: 0%;
  height: 0%;
  opacity: 0;
  line-height: 50px;
  border-radius: 50%;
  background: red;
  position: absolute;
  transition: all .5s ease-Out;
  top: 80px;
  left: 80px;
}

#QWE:hover #AC {
  width: 200%;
  height: 500%;
  opacity: 1;
  top: -70px;
  left: -70px;
}

#QWE:hover a {
  color: Black;
}
* {
  box-sizing: border-box;
}

body {
  background-color: white;
}
* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 50px;
  width: 100%;
  background-color: pink;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: black;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: black;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }



</style>
<body>

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      PasaBuy
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  
  <div class="nav-links">
     <a class="btn btn-link" href="contact.php">Contacts</a>
     <a class="btn btn-link" href="guideliness.php">Guidelines</a>
     <a class="btn btn-link" href="welcome.php">Feedback</a>
     <a class="btn btn-link" href="welcome.php">Home</a>
  </div>
</div>

<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="Bag.php"><h3>Bags</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="cosmetic.php"><h3>Cosmetic</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="Accessories.php"><h3>Accessories</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="#"><h3>Shorts&pants</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="shoes.php"><h3>Shoes</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="#"><h3>Clothes</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="kitchen tools.php"><h3>Cookingware</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="#"><h3>Gadgets</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="bikee.php"><h3>Bikes</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="Hardware.php"><h3>Hardware</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="#"><h3>Sunglasses</h3></a>
  </div>
<div class="button" id="QWE">
    <div id="AC"></div>
    <a href="#"><h3>Perfumes</h3></a>
  </div>

<script>

</script>


</html>
</body>