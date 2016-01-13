$(function() {

  $('.ui.accordion').accordion();
  $('.ui.dropdown').dropdown();
  

  // carousel
  $(".owl-carousel.hero").owlCarousel({
    autoPlay: 6000,
    items: 2,
    singleItem:true
  });

  $('.owl-carousel.partners').owlCarousel({
    autoPlay: 5000,
    items: 6,
    singleItem: false,
    responsive: true
  });
});