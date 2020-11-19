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
  width: 60%;
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
    <img src="5.jpg" height="400">
     </a>
      <h3>STANLEY SCD12S1- 10.8V Cordless/ Battery Drill- 1Bat X 1.5Ah</h3>
      <p>Voltage (V)                                              : 10.8
Battery Capacity (Ah)                              : 1.5
Max Torque (Nm)                                     : 26
No Load Speed (rpm)                              : 0-400/0-1500
Chuck Capacity (mm)                               : 10
Max. Drilling Capacity (wood) (mm)       : 20
Max. Drilling Capacity (metal) (mm)       : 10</p>
      <p><span>&#8369;</span>4,200.00</p>
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
    <img src="55.jpg" height="400">
  </a>
      <h3>STANLEY STEL630 3-1/4 Planer-750W</h3>
      <p>Power                                 : 750W
No load speed                   : 16500rpm
Planing Width                    : 82mm
Planing depth                    : 1.6mm
Rebating Depth                : 12mm
Weight                               : 2.7kg</p>
      <p><span>&#8369;</span>3,470.00</p>
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
    <img src="555.jpg" height="400">
      <h3>DeWALT D26411- Heat Gun</h3>
      <p>Power Input                           : 1800 Watts
Air Flow                                  : 250 / 450 l/min
Weight                                    : 0.80 kg
Length                                    : 253 mm
Height                                     : 210 mm
Hand/Arm Vibration               : 0.86 m/s2
Hand/Arm Vibration               : 1.5 m/s2
Uncertainty K 1 (Vibration)   : 68 m/s²
Sound Pressure Uncertainty : 3 dB(A)
Sound Power                          : 79 dB(A)
Sound Power Uncertainty     : 3 dB(A)
Operating Temperature         : 50-400/ 50-600 °C</p>
      <p><span>&#8369;</span>2,435.00</p>

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
    <img src="5555.jpg" height="400">
      <h3>BOSCH GWS 750-100 – 4 Angle Grinder</h3>
      <p>Power Input                     : 750 W
No- Load Speed              :  4 in
Disc Diameter                  : 100 mm
Weight w/o Cable           : 1.8 kg
Length                              : 270 mm
Width                               : 73 mm
Height                              : 100 mm</p>
      <p><span>&#8369;</span>2,690.00</p>

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
    <img src="55555.jpg" height="400">
  </a>
      <h3>BOSCH GSH 27 VC- 30kg Demolition Hammer</h3>
      <p>Power Input                      : 2,000 W
Impact Energy                   : 69 J
Impact Rate                       : 1,000 bpm
Tool Holder                       : 28 mm Internal Hexagon
Weight                               : 29.5 kg</p>
      <p><span>&#8369;</span>79,695.00</p>

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
    <img src="555555.jpg" height="400">
  </a>
      <h3>BOSCH GLM 80- Laser Range Finder</h3>
      <p>Laser Diode                             : 635 nm, <1 mW
Laser Class                              : 2
Measurement Range               : 0.05-80 m
Measurement Accuracy           : ±1.5 mm
Automatic Deactivation           : 5 min
Units of Measurement             : m/cm, ft/in
Power Supply                           : Built-in-li-ion- battery, 3.7 V, 1.25 Ah</p>
      <p><span>&#8369;</span>10,350.00</p>

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