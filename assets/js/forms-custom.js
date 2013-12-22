// jQuery $('document').ready(); function 
$('document').ready(function(){

	$('#pulser').pulsate({
		color : '#54728c'
	});
	
	$('#pulsateSuccess').pulsate({
			color : '#468845'
		});
	
	$('#pulsateDanger').pulsate({
			color : '#B94A48'
		});
	
	$('#pulsateWarning').pulsate({
			color : '#C09853'
		});

  $(".chosen-select").chosen()
  // jQuery UI Datepicker
  var datepickerSelector = '#datepicker';
  $(datepickerSelector).datepicker({
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "d MM, yy",
    yearRange: '-1:+1'
  }).prev('.btn').on('click', function (e) {
    e && e.preventDefault();
    $(datepickerSelector).focus();
  });
});