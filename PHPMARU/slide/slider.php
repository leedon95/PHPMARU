<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box}
.mySlidesMARU {display: none}

.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

.prevIMG {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}
  .nextIMG {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.nextIMG {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prevIMG:hover, .nextIMG:hover {
  background-color: rgba(0,0,0,0.8);
}

.textonIMG {
  font-family: Verdana, sans-serif;
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.dotonIMG {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dotonIMG:hover {
  background-color: #717171;
}

.fadeIMG {
  -webkit-animation-name: fadeIMG;
  -webkit-animation-duration: 1.5s;
  animation-name: fadeIMG;
  animation-duration: 1.5s;
}

@-webkit-keyframes fadeIMG {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fadeIMG {
  from {opacity: .4}
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prevIMG, .nextIMG,.textonIMG {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

  <div class="mySlidesMARU fadeIMG">
    <img src="MARUWARE1.png" style="width:100%">
    <div class="textonIMG">Click Here!</div>
  </div>

  <div class="mySlidesMARU fadeIMG">
    <img src="MARUWARE2.png" style="width:100%">
    <div class="textonIMG">Click Here!</div>
  </div>

  <div class="mySlidesMARU fadeIMG">
    <img src="MARUWARE3.png" style="width:100%">
    <div class="textonIMG">Click Here!</div>
  </div>

<p align="left">
<a class="prevIMG" onclick="plusSlides(-1)">&#10094;</a>
</p>
<a class="nextIMG" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dotonIMG" onclick="currentSlide(1)"></span>
  <span class="dotonIMG" onclick="currentSlide(2)"></span>
  <span class="dotonIMG" onclick="currentSlide(3)"></span>
</div>

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
  var slides = document.getElementsByClassName("mySlidesMARU");
  var dotonIMGs = document.getElementsByClassName("dotonIMG");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dotonIMGs.length; i++) {
      dotonIMGs[i].className = dotonIMGs[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dotonIMGs[slideIndex-1].className += " active";
}
</script>

</body>
</html>
