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
		  adaptiveHeight: true
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