window.onscroll = function() {scrollFunction()};



document.addEventListener('DOMContentLoaded', function() {
let currentIndex = 0;
const images = document.querySelectorAll('#hero img');
const totalImages = images.length;

function showNextImage() {
images[currentIndex].classList.remove('active');
currentIndex = (currentIndex + 1) % totalImages;
images[currentIndex].classList.add('active');
}

setInterval(showNextImage, 9000);  

// Initially show the first image
images[0].classList.add('active');
});


function scrollFunction() {
var backToTopButton = document.querySelector(".back-to-top");
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
backToTopButton.style.display = "block";
} else {
backToTopButton.style.display = "none";
}}