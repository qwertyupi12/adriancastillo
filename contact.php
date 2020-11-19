<?php
// Initialize the session
session_start();

?>
<!DOCTYPE html>
<html>
<style>
body {background: lightgray;}
h1, h2, h3, h4, h5  {
  border-bottom: 3px solid gray;
  color: black;
  padding-bottom: 20px
}
.container {
  margin: auto;
  width: 350px;
  text-align: center;
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
</style>
<div class="backBtn">
      <span class="line tLine"></span>
      <span class="line mLine"></span>
      <span class="label"><a href="Front.php">Back</a></span>
      <span class="line bLine"></span>
</div>


<div class="container">
   <h1>Adrian D. Castillo</h1>
   <img src="5.jpg" class="image1"  width="460" height="340">
   <h4>About Me</h4>
    <p>Age: 21 </p>
    <p>birthdate: Aug. 23 1999 </p>
    <p>3rd yr. college</p>
   <p>live in: Cabuyao city laguna </p>
   <p>Email add.: adriancastillo082399@gmail.com</p>
    <p>Contact no: 09265586283 </p> 
</div>
<div class="container">
   <h1>Eunice Jane M. Yoma</h1>
   <img src="5.jpg" class="image1"  width="460" height="340">
   <h4>About Me</h4>
    <p>Age: 21 </p>
    <p>birthdate: Aug. 23 1999 </p>
    <p>3rd yr. college</p>
   <p>live in: Cabuyao city laguna </p>
   <p>Email add.: adriancastillo082399@gmail.com</p>
    <p>Contact no: 09265586283 </p> 
no.jpg" class="image2" height="100">
      </a>
  

   <h4>Social Media</h4>
   Add me on fb - <a href="https://www.facebook.com/">Adriancastillo</a>
</div>

</html>
