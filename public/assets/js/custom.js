$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $(".headerCol").addClass("fixedHeader");
    } else {
      $(".headerCol").removeClass("fixedHeader");
    }
  });
});

/************************************************/

$('.scrollTo').click(function(){
  $('html, body').animate({
    scrollTop: $( $(this).attr('href') ).offset().top - 90
  }, 500);
  return false;
});

/************************************************/

$('.navLinks > ul > li p').click(function(){
  $(this).next().slideToggle();
});

/************************************************/

$('.toggle').click(function(){
  $('html').toggleClass('actNav');
});
$('.menuBackDrop').click(function(){
  $('html').removeClass('actNav');
});

/************************************************/

// show more content
$(".viewCol a").on("click", function() {
  var $this = $(this);
  var $content = $this.parents(".vmContent");
  $content.toggleClass('showMoreContent');
});
$(".learnMoreCol a").on("click", function() {
  var $this = $(this);
  var $content = $this.parents(".lMoreColMain");
  $content.toggleClass('showLMoreContent');
});

// ----------------------------

var swiper = new Swiper(".bannerSlider", {
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});