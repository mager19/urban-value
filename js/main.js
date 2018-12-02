jQuery(document).ready(function($){

jQuery( ".titl" ).mouseenter(function() {
	$(this).toggleClass('specialtxt');
  
});
jQuery( ".titl" ).mouseleave(function() {
  $(this).toggleClass('specialtxt');
});
	// document.getElementsByTagName('iframe')[0].contentWindow.getElementsByClassName('ytp-watch-later-button')[0].style.display = 'none';
 		
		$('.slide__principal').slick({
  				autoplay: false,
  				speed: 500,
				dots: false,
				infinite: true,
				slidesToShow: 1, 
		  		slidesToScroll: 1,
		  		arrows:true,
		  		pauseOnHover: true,
		  		swipeToSlide: true,
		  		responsive: [
		  			
				    {
				      breakpoint: 800,
				      settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1,
				        infinite: true,
				        
				      }
		    		},    		
		    		{
		      		  breakpoint: 480,
		      		  settings: {
		        	  slidesToShow: 1,
		        	  slidesToScroll: 1,
		        	  arrows: false,
		      		}
		    },
		    	]
		});		
		$('.quote-slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: false
		});
		$('.dess').slick({
  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: false
});
		
		$('.slide__clientes').slick({
  				autoplay: true,
  				speed: 2000,
				dots: false,
				infinite: true,
				slidesToShow: 6, 
		  		slidesToScroll: 1,
		  		arrows:true,
		  		pauseOnHover: true,
		  		responsive: [
		  			
				    {
				      breakpoint: 800,
				      settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1,
				        infinite: true,
				        
				      }
		    		},    		
		    		{
		      		  breakpoint: 480,
		      		  settings: {
		        	  slidesToShow: 1,
		        	  slidesToScroll: 1,
		        	  arrows: false,
		      		}
		    },
		    	]
		});


		/*$('.counter').counterUp({
    delay: 500,
    time: 5000
});*/

		$(".cta .cta-btn").on( "click", function() {	 
	        $('.cta .form').toggle("fast");
			$('.cta .cta-txt').toggle("fast");
		});
		$(".cta .close").on( "click", function() {	 
	        $('.cta .form').toggle("fast");
			$('.cta .cta-txt').toggle("fast");
		});

/******* menu scroll **********/

jQuery('li.uno a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(1);
    e.stopPropagation();
});
jQuery('li.dos a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(2);
    e.stopPropagation();
});
jQuery('li.tres a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(3);
    e.stopPropagation();
});
jQuery('li.cuatro a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(4);
    e.stopPropagation();
});
jQuery('li.cinco a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(5);
    e.stopPropagation();
});
jQuery('li.seis a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(6);
    e.stopPropagation();
});
jQuery('li.siete a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(7);
    e.stopPropagation();
});
jQuery('li.ocho a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(8);
    e.stopPropagation();
});
jQuery('li.nueve a').on('click', function(e){
	e.preventDefault();
    jQuery(".home").moveTo(9);
    e.stopPropagation();
});

jQuery('ul#primary-menu >li> a').on('click', function(e){
	
    jQuery("nav#site-navigation").removeClass('toggled');
    
});


		var timeoutId;
var $videoBgAspect = $(".videobg-aspect");
var $videoBgWidth = $(".videobg-width");
var videoAspect = $videoBgAspect.outerHeight() / $videoBgAspect.outerWidth();

function videobgEnlarge() {
  console.log('resize');
  windowAspect = ($(window).height() / $(window).width());
  if (windowAspect > videoAspect) {
    $videoBgWidth.width((windowAspect / videoAspect) * 100 + '%');
  } else {
    $videoBgWidth.width(100 + "%")
  }
}

$(window).resize(function() {
  clearTimeout(timeoutId);
  timeoutId = setTimeout(videobgEnlarge, 100);
});

$(function() {
  videobgEnlarge();
});
	
});