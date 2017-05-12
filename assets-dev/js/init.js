(function($) {

	var init = function() {
		/**
		 * Initialize Bootstrap 4 carousel
		 */
		$('.carousel').carousel();
	};

	var starts_carousel = function() {
		$(document).ready(function(){
		    $('.carousel').carousel('pause'); 

		    $('.carousel').viewportChecker({
		        offset: 200,                  
		        callbackFunction: function(elem){
		            setTimeout(function(){
		                $('.carousel').carousel(''); 
		            },500);
		        }
		    });

		});
	};

	var fullscreenCarousel = function() {
		var $item = $('.carousel-item.landing-page'); 
		var $wHeight = $(window).height();
		$item.eq(0).addClass('active');
		$item.height($wHeight); 
		$item.addClass('full-screen');

		$('.carousel.landing-page img').each(function() {
		  var $src = $(this).attr('src');
		  var $color = $(this).attr('data-color');
		  $(this).parent().css({
		    'background-image' : 'url(' + $src + ')',
		    'background-color' : $color
		  });
		  $(this).remove();
		});

		$(window).on('resize', function (){
		  $wHeight = $(window).height();
		  $item.height($wHeight);
		});

		$('.carousel').carousel({
		  interval: 6000,
		  pause: "false"
		});
	};

	var food = function() {
		$(document).ready(function(){
	
			$('div.nav a').click(function(){

				$('a.nav-link').removeClass('active');
				$('.tab-content .tab-pane').removeClass('active');
			})

		})
	};

	var second_indicator = function() {
		$('.carousel-indicators.upcomming-events li').on('click', function() {
		  $('.carousel').carousel(parseInt(this.getAttribute('data-slide-to')));
		});
	}


	/**
	 * Call functions when the DOM is ready
	 */
	$(function() {
		init();
		starts_carousel();
		second_indicator();
		fullscreenCarousel();
		food();
	});

})(jQuery)