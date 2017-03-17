
//ClassToggle for Navigation
$(document).ready(function () {

$('#nav-toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
//readmore toggle
  $('#readmore').click(function() {
     $(this).toggleClass('active');
     $('#extendedcontent').toggleClass('open');
    });

//readmore // read less
$('.readmore--text').click(function () {
    var oldText = $(this).text();
    var newText = $(this).data('text');
    $(this).text(newText).data('text',oldText);
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


//smooth scroll initiate.
smoothScroll.init();
