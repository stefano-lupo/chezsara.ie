$(document).ready(function() {
	var submittedModal = $('#submitted-modal');
	var spinner = $('#spinner');
	var fillFieldsText = $('#fill-fields-text');

	$("form").submit(function() {
		var filledAllFields = true, postArray = [];
		fillFieldsText.hide();

		$('form').find('input, textarea').css('background-color', '#A2F99E');
		$('form input, form textarea').each(function() {
			if (($(this).val() == "") || ($(this).val() == null)) {
				$(this).css("background-color", "red");
				filledAllFields = false;
			} else {
				var field = $(this).val().replace(/\r\n|\r|\n/g, "<br />");
				postArray.push(field);
			}
		});
		
		submittedModal.modal('show');

		if (filledAllFields) {
			spinner.show();
			postArray.push($('#comments').val().replace(/\r\n|\r|\n/g, "<br />"));
			
			$.post("generic/send-mail.php", {posted: postArray})
				.done(function(resp) {
					console.log("Sent successfully")
					$('#success-text').show();
					spinner.hide();
				})
				.fail(function(xhr, textStatus, errorThrown) {
					console.log("Error: " + xhr + " - " + textStatus + " - " + errorThrown);
					spinner.hide();
					$('#failure-text').show();
				})
			} else {
				fillFieldsText.show();
			}
		event.preventDefault();
	});
});
