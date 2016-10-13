
//ClassToggle for Navigation
$(document).ready(function () {

$('#nav-toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });

  $('.nav__list--link').click(function() {
     $(this).toggleClass('active');
     $('#overlay').toggleClass('open');
    });


  var targetOffset1 = $("#about").offset().top;

  var $w = $(window).scroll(function(){
      if ( $w.scrollTop() > targetOffset1 ) {
        $('.top__navigation').toggleClass('dark');

      } else {
        $('.top__navigation').toggleClass('light');
      }
  });


});
