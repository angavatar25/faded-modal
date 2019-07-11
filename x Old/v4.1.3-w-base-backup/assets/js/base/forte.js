// side nav (with help of css )
$('.navbar-toggler').click(function(){
//	$('.navbar-collapse').hide();
      $('.side-navbar').animate({'width':'toggle'}, 500);
	return false;
});

//initiating click (owl)
$('#prev-carousel').click(function(){
	$('.owl-prev').click();
});

$('#next-carousel').click(function(){
	$('.owl-next').click();
});


//static display on mobile
$(function() {
	var owl = $('.owl-carousel'),
	    owlOptions = {
	  		stagePadding: 50,
		    loop:true,
		    margin:10,
		    nav:true,
	    	responsive:{
		        0:{
		            items:1
		        },
		        768:{
		        	stagePadding: 150,
		            items:2,
		            margin: 30
	        	}
	    	}
	    };

	if ( $(window).width() > 767 ) {
	    var owlActive = owl.owlCarousel(owlOptions);
	} else {
	    owl.addClass('off');
	}

	$(window).resize(function() {
	    if ( $(window).width() < 768 ) {
	        if ( $('.owl-carousel').hasClass('off') ) {
	            var owlActive = owl.owlCarousel(owlOptions);
	            owl.removeClass('off');
	        }
	    } else {
	        if ( !$('.owl-carousel').hasClass('off') ) {
	            owl.addClass('off').trigger('destroy.owl.carousel');
	            owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
	        }
	    }
	});
});