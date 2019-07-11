/* ==========================================================================
   General
   ========================================================================== */

/* Viewport Animations
-------------------------------------------------- */
$(document).ready(function() {
  // Attention Seekers
  $('.vp-pulse').viewportChecker({classToAdd: 'visible animated pulse', offset: 100});
  $('.vp-swing').viewportChecker({classToAdd: 'visible animated swing', offset: 100});

  // Fade In
  $('.vp-fadein').viewportChecker({classToAdd: 'visible animated fadeIn', offset: 100});
  $('.vp-fadeinup').viewportChecker({classToAdd: 'visible animated fadeInUp', offset: 100});
  $('.vp-fadeinright').viewportChecker({classToAdd: 'visible animated fadeInRight', offset: 100});
  $('.vp-fadeindown').viewportChecker({classToAdd: 'visible animated fadeInDown', offset: 100});
  $('.vp-fadeinleft').viewportChecker({classToAdd: 'visible animated fadeInLeft', offset: 100});

  // Slide In
  $('.vp-slideinup').viewportChecker({classToAdd: 'visible animated slideInUp', offset: 100});
  $('.vp-slideinright').viewportChecker({classToAdd: 'visible animated slideInRight', offset: 100});
  $('.vp-slideindown').viewportChecker({classToAdd: 'visible animated slideInDown', offset: 100});
  $('.vp-slideinleft').viewportChecker({classToAdd: 'visible animated slideInLeft', offset: 100});

  // Rotate In
  $('.vp-rotatein').viewportChecker({classToAdd: 'visible animated rotateIn', offset: 100});
  $('.vp-rotateinupright').viewportChecker({classToAdd: 'visible animated rotateInUpRight', offset: 100});
  $('.vp-rotateinupleft').viewportChecker({classToAdd: 'visible animated rotateInUpLeft', offset: 100});
  $('.vp-rotateindownright').viewportChecker({classToAdd: 'visible animated rotateInDownRight', offset: 100});
  $('.vp-rotateindownleft').viewportChecker({classToAdd: 'visible animated rotateInDownLeft', offset: 100});

  // Zoom In
  $('.vp-zoomin').viewportChecker({classToAdd: 'visible animated zoomIn', offset: 100});
  $('.vp-zoominup').viewportChecker({classToAdd: 'visible animated zoomInUp', offset: 100});
  $('.vp-zoominright').viewportChecker({classToAdd: 'visible animated zoomInRight', offset: 100});
  $('.vp-zoomindown').viewportChecker({classToAdd: 'visible animated zoomInDown', offset: 100});
  $('.vp-zoominleft').viewportChecker({classToAdd: 'visible animated zoomInLeft', offset: 100});

  // Specials
  $('.vp-jackinthebox').viewportChecker({classToAdd: 'visible animated jackInTheBox', offset: 100});
  $('.vp-rollin').viewportChecker({classToAdd: 'visible animated rollIn', offset: 100});
  $('.vp-rollout').viewportChecker({classToAdd: 'visible animated rollOut', offset: 100});
}); 


/* Smooth Scroll
-------------------------------------------------- */
$('a.smooth-scroll').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 800);
      return false;
    }
  }
});

/* Parallax
-------------------------------------------------- */
$(document).ready(function() {
  $('.parallax-window').parallax({parallax: 'scroll'});
}); 


/* ==========================================================================
   Navbar
   ========================================================================== */

/* Navbar Slide (Mobile)
-------------------------------------------------- */
// Initial position hide
$('.navbar-slide').hide();

// Mobile menu slide from the left
$('.navbar-toggler').click(function(){
  $('.navbar-slide').toggle( "slide" );
});

$('.navbar-slide-close').click(function(){
  $('.navbar-slide').toggle( "slide" );
});

// Touch any to close navbar slide
$(document).bind("mouseup touchend", function (e) {
  var cont1 = $("#navbar-slide, .product-slide");
  if (!cont1.is(e.target)
    && cont1.has(e.target).length === 0) 
  {
    cont1.addClass('slideOutLeft');
    $('.overlaid').css('background', 'linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0))');
    $('.overlaid').css('display', 'none');
  }
});

