$(function() {

  $('.ui.accordion').accordion();
  $('.ui.dropdown').dropdown();
  

  // carousel
  $(".owl-carousel").owlCarousel({
    autoPlay: 4000,
    items: 3,
    singleItem:true
  });
});