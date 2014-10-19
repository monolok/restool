// Custom JS
$(document).ready(function(){

	
   $('#aclick').click(function (event) {
   		$('html, body').animate({
   			scrollTop: $('#displayG').offset().top
   		}, 1500);
   		event.preventDefault();
   });


});