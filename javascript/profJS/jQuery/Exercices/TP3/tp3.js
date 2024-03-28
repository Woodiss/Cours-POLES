let myTimeout;
let currentIndex = 0;

let carousel = $("#carousel-container");
let carouselList = carousel.find(".carousel-list");
let carouselItems = carousel.find(".carousel-item");
let itemWidth = carouselItems.outerWidth(); // Récupère la largeur d'un élément du carrousel
carouselList.css("width", carouselItems.length * itemWidth);

// Ajuster la largeur du carrousel pour contenir toutes les images côte à côte

// Gestionnaire d'événement pour le bouton "Suivant"
$("#next-btn").click(function () {
  myStopFunction();
  nextt();
});

// Gestionnaire d'événement pour le bouton "Précédent"
$("#prev-btn").click(function () {
  myStopFunction();
  if (currentIndex === 0) {
    currentIndex = carouselItems.length - 1;
    carouselList.animate({ marginLeft: -(currentIndex * itemWidth) });
  } else if (currentIndex > 0) {
    currentIndex--;
    carouselList.animate({ marginLeft: -(currentIndex * itemWidth) });
  }
});

function nextt() {
  if (currentIndex === carouselItems.length - 1) {
    currentIndex = 0;
    carouselList.animate({ marginLeft: -(currentIndex * itemWidth) });
  } else if (currentIndex < carouselItems.length - 1) {
    currentIndex++;
    carouselList.animate({ marginLeft: -(currentIndex * itemWidth) });
  }
}

function autoplay() {
  console.log("play");
  myTimeout = setTimeout(function () {
    nextt();
    autoplay();
  }, 15000);
}

function myStopFunction() {
  clearTimeout(myTimeout);
  autoplay();
}

autoplay();

// $(document).ready(function () {
//   var interval = window.setInterval(rotateSlides, 3000);

//   function rotateSlides() {
//     var $firstSlide = $("#carrousel").find("div:first");
//     var width = $firstSlide.width();

//     $firstSlide.animate({ marginLeft: -width }, 1000, function () {
//       var $lastSlide = $("#carrousel").find("div:last");
//       $lastSlide.after($firstSlide);
//       $firstSlide.css({ marginLeft: 0 });
//     });
//   }
// });
