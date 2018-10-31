jQuery(document).ready(function($){
 		
		$('.slide__principal').slick({
  				autoplay: true,
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
	
});