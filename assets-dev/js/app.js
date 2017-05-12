$(window).scroll(function(){
	if($(document).scrollTop() > 20) {
		$('nav').addClass('shrink');
	}
	else {
		$('nav').removeClass('shrink');
	}
});

// ===== Scroll to Top ==== 
$(window).scroll(function() {
if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 500px
$('#return-to-top').fadeIn(200);    // Fade in the arrow
} else {
$('#return-to-top').fadeOut(200);   // Else fade out the arrow
}
});
$('#return-to-top').click(function() {      // When arrow is clicked
$('body,html').animate({
scrollTop : 0                       // Scroll to top of body
}, 500);
});