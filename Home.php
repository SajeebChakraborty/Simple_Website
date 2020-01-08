<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="Style3.css">
	<marquee>Welcome to our Taposh Chattrabash!</marquee>

	<div class="topnav">
  <a class="active" href="Home.php">Home</a>
  <a href="Notice.php">Notice</a>
   <a href="Complain_us.php">Contact</a>
  <a href="Seat_Available.php">Seat Available</a>
  <a href="Member_Login.php">Member Login</a>
  <a href="Admin.php">Admin Panel</a>
  <input type="text" placeholder="Search..">
</div>
<br>
<div class="slideshow-container" align="left" style="float: left;">

<div class="mySlides fade">
   <img src="img3.jpg" width="910" height="515">
</div>

<div class="mySlides fade" align="left">
  <img src="img1.jpg" width="910" height="515">
</div>

<div class="mySlides fade" align="left">
 <img src="img2.jpg" width="910" height="515">
 <br>
</div>
<div style="text-align:center;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
 <div align="center">
       <br>
       <br>
       <br>
      <h1><p align="center"><font color="Blue" size="30"><b><pre> T A P O S H <br/><br/>C H A T T R A B A S H</pre></b><p><h1></font>
      </div>

<br/>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
<br>


</div>

<br/>
      
      <h2><font color="Red"> Manager Message</font></h2>
      <br>
      <br>
      <img src="manager.jpg" title="CSE-RU" align="left">
      <p align="center"> 
       Manager Taposh Chattrabash  
      <br/>
      <br/>
       Taposh Chattrabash is situated at Kajla,Rajshahi.It is under at Motihar Thana,6205.There are four floors and 16 rooms.Each floor has four rooms where three rooms have three seats available and one is a singular room.
      <br/>
      <br/>
      Thank you.
      <br/>
      <b>Mr. Jewel Reza</p></b>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
<br>
<br>
<br>
<br>
	<br><center>
	<i><p> POWERED BY </p></i>
	<b><p>Sajeeb Chakraborty </p></b>
	</center>
<body bgcolor="#393e46">
</body>
</html>