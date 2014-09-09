/* <![CDATA[ */

/// Jquery validate newsletter
jQuery(document).ready(function(){

	$('#newsletter').submit(function(){

		var action = $(this).attr('action');

		$("#message-newsletter").slideUp(750,function() {
		$('#message-newsletter').hide();
		
		$('#submit-newsletter')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');

		$.post(action, {
			email_newsletter: $('#email_newsletter').val()
		},
			function(data){
				document.getElementById('message-newsletter').innerHTML = data;
				$('#message-newsletter').slideDown('slow');
				$('#newsletter .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-newsletter').removeAttr('disabled');
				if(data.match('success') != null) $('#newsletter').slideUp('slow');

			}
		);

		});

		return false;

	});

});
// Jquery validate form contact
jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message-contact").slideUp(750,function() {
		$('#message-contact').hide();

 		$('#submit-contact')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			name_contact: $('#name_contact').val(),
			lastname_contact: $('#lastname_contact').val(),
			email_contact: $('#email_contact').val(),
			phone_contact: $('#phone_contact').val(),
			message_contact: $('#message_contact').val(),
			verify_contact: $('#verify_contact').val()
		},
			function(data){
				document.getElementById('message-contact').innerHTML = data;
				$('#message-contact').slideDown('slow');
				$('#contactform .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-contact').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});
		});
		
// Jquery validate form quote
jQuery(document).ready(function(){

	$('#quoteform').submit(function(){

		var action = $(this).attr('action');

		$("#message-quote").slideUp(750,function() {
		$('#message-quote').hide();

 		$('#submit-quote')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			name_quote: $('#name_quote').val(),
			email_quote: $('#email_quote').val(),
			phone_quote: $('#phone_quote').val(),
			date_quote: $('#date_quote').val(),
			days_quote: $('#days_quote').val(),
			boat_quote: $('#boat_quote').val(),
			skipper_quote: $('#skipper_quote').val(),
			passengers_quote: $('#passengers_quote').val(),
			verify_quote: $('#verify_quote').val()
		},
			function(data){
				document.getElementById('message-quote').innerHTML = data;
				$('#message-quote').slideDown('slow');
				$('#quoteform .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-quote').removeAttr('disabled');
				if(data.match('success') != null) $('#quoteform').slideUp('slow');

			}
		);

		});

		return false;

	});
		});
		
// Jquery validate form quick booking
jQuery(document).ready(function(){

	$('#quick_booking').submit(function(){

		var action = $(this).attr('action');

		$("#message-quick-booking").slideUp(750,function() {
		$('#message-quick-booking').hide();

 		$('#submit-quick-booking')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			name_quick_booking: $('#name_quick_booking').val(),
			email_quick_booking: $('#email_quick_booking').val(),
			phone_quick_booking: $('#phone_quick_booking').val(),
			date_quick_booking: $('#date_quick_booking').val(),
			course_quick_booking: $('#course_quick_booking').val(),
			student_quick_booking: $('#student_quick_booking').val(),
			verify_quick_booking: $('#verify_quick_booking').val()
		},
			function(data){
				document.getElementById('message-quick-booking').innerHTML = data;
				$('#message-quick-booking').slideDown('slow');
				$('#quick_booking .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-quick-booking').removeAttr('disabled');
				if(data.match('success') != null) $('#quick_booking').slideUp('slow');

			}
		);

		});

		return false;

	});
		});
		
// Jquery validate form booking
jQuery(document).ready(function(){

	$('#contactform_booking').submit(function(){

		var action = $(this).attr('action');

		$("#message-booking").slideUp(750,function() {
		$('#message-booking').hide();

 		$('#submit-booking')
			.after('<i class="icon-spin4 animate-spin loader"></i>')
			.attr('disabled','disabled');
			
		$.post(action, {
			name_booking: $('#name_booking').val(),
			lastname_booking: $('#lastname_booking').val(),
			email_booking: $('#email_booking').val(),
			phone_booking: $('#phone_booking').val(),
			country_booking: $('#country_booking').val(),
			gender_booking: $('#gender_booking').val(),
			level_booking: $('#level_booking').val(),
			age_booking: $('#age_booking').val(),
			course_booking: $('#course_booking').val(),
			date_booking: $('#date_booking').val(),
			message_booking: $('#message_booking').val(),
			verify_booking: $('#verify_booking').val()
		},
			function(data){
				document.getElementById('message-booking').innerHTML = data;
				$('#message-booking').slideDown('slow');
				$('#contactform_booking .loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit-booking').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform_booking').slideUp('slow');

			}
		);

		});

		return false;

	});
		});

  /* ]]> */