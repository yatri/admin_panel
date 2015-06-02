$(document).ready(function() {

	// Home - Slider Height
	var window_height = $(window).height();
	$(".slide .item").css('height', window_height-85);

	// tooltips
	$('.tooltips').tooltip();

});