// Onload funcions General functions
//
$(document).ready(function () {
	// Lang selectors
	$("#selector").click(function(event) {
		event.preventDefault();
		$("#morelangs").fadeToggle("slow", "linear");
	});
	$("#selector-footer").click(function(event) {
		event.preventDefault();
		$("#footerlang").fadeToggle("slow", "linear");
	});
  	
    $('#coda-slider-1').codaSlider({
        autoSlide: true,
        autoSlideInterval: 7000,
        autoSlideStopWhenClicked: true,
        dynamicTabs: false
    });
    $('#coda-slider-2').codaSlider({
         autoSlide: true,
         autoSlideInterval: 7000,
         autoSlideStopWhenClicked: true,
         dynamicArrows: false,
         dynamicTabs: false
     });
     $('#coda-slider-3').codaSlider({
         autoSlide: true,
         autoSlideInterval: 7000,
         autoSlideStopWhenClicked: true,
         dynamicArrows: false,
         dynamicTabs: false
     });
     $('#coda-slider-tour').codaSlider({
       autoSlide: false,
       dynamicArrows: false,
       dynamicTabs: false,
     });
     $("a.thumb").fancybox({
       'transitionIn'	: 'elastic',
       'transitionOut'	: 'elastic',
       'speedIn'		:	300, 
       'speedOut'		:	100
     });	
});

function tractis_ajax_link(given_url, reload) {
    jQuery.ajax({
        url: given_url,
        success: function(data) {
            if (reload == true) window.location.reload();
            return false;
        }
    });
};