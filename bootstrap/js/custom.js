/*
 * Custom JS file
 */

$(function() {
    $('#yes-radio').click(function(){
		$('#guest-number').show('fade');
		$('#email').show('fade');
	});
	$('#no-radio').click(function(){
		$('#guest-number').hide('fade');
		$('#email').hide('fade');
	});

	$('#add-link').click(function(){
		$('#show-link').show();
	});
	$('#close-link').click(function(){
		$('#show-link').hide();
	});
	$('#add-text-link').click(function(){
		var append_message = '<' + ' a href="' + $('#link-href').val() + '">' + $('#link-text').val() + '< /a' + '> ';
		console.log(append_message);
			$('#message').append(
				append_message
			);

		$('#link-text').val('');
		$('#show-link').hide();
	})

	$('.honeymoon-response').on('click', function(e){ Transition.honeymoon($(this)[0]['id']) });
	$('.message-response').on('click', function(e){ Transition.messages($(this)[0]['id']) });
 });

var Transition = {
	honeymoon:function(id) {
		window.location.href = "editHoneymoon.php?id="+id;
	},

	messages:function(id) {
		window.location.href = "showMessages.php?id="+id;
	}
}
