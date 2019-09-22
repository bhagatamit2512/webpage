<center>
  <div class="slideshow-container">
<div class="mySlides fade">
  <img class="lot" src="1.jpg" style="">
  <div class="text"><h1>YOUR ONLINE LIBRARY</h1></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="2.jpg" style="">
  <div class="text"><h1>HUGE COLLECTION OF BOOK</h1></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="11.jpg" style="">
  <div class="text"><h1>join green revolution, <br>help to save tree! </h1></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="15.jpg" style="">
  <div class="text"><h1>READ ANY TIME <br>JUST A CLICK AWAY  </h1></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="book.jpg" style="">
  <div class="text"><h2>WHY BOOK N BOOK?...</h2></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="19.jpg" style="">
  <div class="text"><h1>SIMPLE MEMBERSHIP PROCESS</h1></div>
</div>
<div class="mySlides fade">
  <img class="lot" src="20.jpg" style="">
  <div class="text"><h1>LESS SECURITY DEPOSIT </h1></div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
</center>
<br>
<center>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
</div></center>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>



<style>

.material-icons{
  font-size: 24px;
  position: relative;
  top: 4px;
}
body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}
head{
  padding: 30px;
  text-align: center;
  background: white;
}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin:auto;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: relative;
  top: 25%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color:#11A18A;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Caption text */
.text {
  color: #F9034D;
  font-size: 15px;
  padding: 8px 8px;
  position: absolute;
  bottom: 20px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 200px) {
  .prev, .next,.text {font-size: 11px}
}

.lot{
  width: 70%;
  height: 400px;
}
body, html {
  height: 100%;
  margin: 0;
}

</style>
