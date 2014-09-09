// MENU  =============== //
jQuery('ul.sf-menu').superfish();

// MENU MOBILE ==========//
// Collpsable menu mobile and tablets
$('#mobnav-btn').click(
function () {
	"use strict";
    $('.sf-menu').slideToggle(400)("xactive");
});

$('.mobnav-subarrow').click(
function () {
	"use strict";
    $(this).parent().toggleClass("xpopdrop");
});

// SCROLL TO TOP ===============================================================================
$(function() {
	$(window).scroll(function() {
		"use strict";
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},500);
	});	
	
});

    // HOVER IMAGE MAGNIFY===============================================================================
$(document).ready(function(){
	"use strict";
    //Set opacity on each span to 0%
    $(".magnify").css({'opacity':'0'});

	$('.picture a').hover(
		function() {
			$(this).find('.magnify').stop().fadeTo(800, 1);
		},
		function() {
			$(this).find('.magnify').stop().fadeTo(800, 0);
		}
	)
});	


<!-- Toggle -->			
	$('.togglehandle').click(function()
	{
		$(this).toggleClass('active')
		$(this).next('.toggledata').slideToggle()
	});

	
<!-- Tooltip -->	
$('.tooltip-1').tooltip({html:true});

<!-- Accrodian -->	
	var $acdata = $('.accrodian-data'),
		$acclick = $('.accrodian-trigger');

	$acdata.hide();
	$acclick.first().addClass('active').next().show();	
	
	$acclick.on('click', function(e) {
		if( $(this).next().is(':hidden') ) {
			$acclick.removeClass('active').next().slideUp(300);
			$(this).toggleClass('active').next().slideDown(300);
		}
		e.preventDefault();
	});
	
  //accordion	
function toggleChevron(e) {
	"use strict";
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('icon-plus icon-minus');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
$('#accordion').on('hidden.bs.collapse', function () {
})
/*--------------------------------------------------------
Weather
--------------------------------------------------------*/	  
$('#weather').weatherfeed(['USFL0244'], {
		forecast: true
	});

/*--------------------------------------------------------
Pop tooltip
--------------------------------------------------------*/	  
 $('.po-markup > .po-link').popover({
    trigger: 'hover',
    html: true,  // must have if HTML is contained in popover

    // get the title and conent
    title: function() {
      return $(this).parent().find('.po-title').html();
    },
    content: function() {
      return $(this).parent().find('.po-body').html();
    },

    container: 'body',
    placement: 'top'

  });	

//Pace holder
$('input, textarea').placeholder();



	
	



