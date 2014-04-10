$(document).ready(function () {
	
	$('.options-toggle').click(function(e){
		e.preventDefault();
		$('.options-holder').toggleClass('closed');
		//$('.options-holder .col-sm-4').slideToggle('hidden');
	});

	$('.user-menu').click(function(e){
		e.preventDefault();
		$('.user-details').toggleClass('user-details-close');
		$('.content').toggleClass('user-details-open');
	});

// Sidebar dropdown
	$('ul.nav-list').accordion();
	$('.toggle-left-sidebar').click(function(e){
		e.preventDefault();
		$('.left-sidebar').toggleClass('left-sidebar-open');
		if(!$('.left-sidebar').hasClass('left-sidebar-open'))
		{
			$('.user-details').addClass('user-details-close');
			$('.content').removeClass('user-details-open');
		}
		$('.content').toggleClass('left-sidebar-open');
	})
 	
 		// PANELS

	// panel close
	$('.panel-close').click(function(e){
		e.preventDefault();
		$(this).parent().parent().parent().parent().fadeOut();
	});

	$('.panel-minimize').click(function(e){
		e.preventDefault();
		var $target = $(this).parent().parent().parent().next('.panel-body');
		if($target.is(':visible')) { $('i',$(this)).removeClass('fa-chevron-up').addClass('fa-chevron-down'); }
		else { $('i',$(this)).removeClass('fa-chevron-down').addClass('fa-chevron-up'); }
		$target.slideToggle();
	});
	$('.panel-settings').click(function(e){
		e.preventDefault();
		$('#myModal').modal('show');
	});


});