// Trigger animation on scroll based on viewport
$(document).ready(function() {
  $('.vp-fadeinleft').viewportChecker({
      classToAdd: 'visible animated fadeInLeft',
      offset: 100
  });   
  $('.vp-fadeinright').viewportChecker({
      classToAdd: 'visible animated fadeInRight',
      offset: 100
  });  
  $('.vp-fadein').viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 100
  });
  $('.vp-fadeindown').viewportChecker({
      classToAdd: 'visible animated fadeInDown',
      offset: 100
  });
  $('.vp-fadeinup').viewportChecker({
      classToAdd: 'visible animated fadeInUp',
      offset: 100
  });
  $('.vp-slideinleft').viewportChecker({
    classToAdd: 'visible animated slideInLeft',
    offset: 100
  });  
  $('.vp-slideinright').viewportChecker({
    classToAdd: 'visible animated slideInRight',
    offset: 100
  });
  $('.vp-zoomin').viewportChecker({
    classToAdd: 'visible animated zoomIn',
    offset: 100
  });
  $('.vp-zoomindown').viewportChecker({
    classToAdd: 'visible animated zoomInDown',
    offset: 100
  });  
  $('.vp-rotatein').viewportChecker({
    classToAdd: 'visible animated rotateIn',
    offset: 100
  });  
  $('.vp-slideindown').viewportChecker({
    classToAdd: 'visible animated slideInDown',
    offset: 100
  });
}); 

// Trigger animation on scroll
$(window).scroll(function() {
  $('.anima').each(function(){
  var imgPos = $(this).offset().top;
  var topOfWindow = $(window).scrollTop();
    if (imgPos < topOfWindow+600) {
      $(this).find('.animated.fadeinup').addClass('fadeInUp');
    }
  });
  $('.anima').each(function(){
  var imgPos = $(this).offset().top;
  var topOfWindow = $(window).scrollTop();
    if (imgPos < topOfWindow+600) {
      $(this).find('.animated.fadeindown').addClass('fadeInDown');
    }
  });
  $('.anima').each(function(){
  var imgPos = $(this).offset().top;
  var topOfWindow = $(window).scrollTop();
    if (imgPos < topOfWindow+600) {
      $(this).find('.animated.fadeinleft').addClass('fadeInLeft');
    }
  });
  $('.anima').each(function(){
  var imgPos = $(this).offset().top;
  var topOfWindow = $(window).scrollTop();
    if (imgPos < topOfWindow+600) {
      $(this).find('.animated.fadeinright').addClass('fadeInRight');
    }
  });
  $('.anima').each(function(){
  var imgPos = $(this).offset().top;
  var topOfWindow = $(window).scrollTop();
    if (imgPos < topOfWindow+600) {
      $(this).find('.animated.fadein').addClass('fadeIn');
    }
  });
});

// jQuery UI Datepicker
$(function() {
  $(".form-control-datepicker").datepicker();
});

// Animation on scroll
/* $(window).scroll(function() {
    $(".item1").each(function() {
      var a = $(this).offset().top,
          d = $(window).scrollTop();
        d + 600 > a && ($(this).addClass("animated fadeInUp"), 
        $(".item2").addClass("animated fadeInUp delayp2"), 
        $(".item3").addClass("animated fadeInLeft delayp4"), 
        $(".item4").addClass("animated fadeInLeft delayp6"), 
        $(".item5").addClass("animated fadeInLeft delayp8"))
    }), 
    $(".item6").each(function() {
      var a = $(this).offset().top,
          d = $(window).scrollTop();
        d + 600 > a && ($(this).addClass("animated fadeInUp"), 
        $(".item7").addClass("animated fadeInUp delayp2"), 
        $(".item8").addClass("animated fadeInUp delayp4"), 
        $(".item9").addClass("animated fadeInLeft delayp6"))
    })
  })
}); */
