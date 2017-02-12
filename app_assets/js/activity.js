function check_activity_form() {
	var form_ok = true;
	if (!$('#activity_title').val().length) {
		$('#activity_title').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#activity_title').parent().removeClass('bad');

	return form_ok;
}

$(function () {
	$("#datepickerStart").datepicker({"dateFormat": 'dd/mm/yy'});
});

$(function () {
	$("#datepickerEnd").datepicker({"dateFormat": 'dd/mm/yy'});
});

$(document).ready(function () {
	$('#add_question_form').hide();
	$('#add_question_button').click(function () {
		$('#add_question_form').show();
		$('#add_answer').click(function () {
			$('#question_answer').append('<div class="input-group col-md-3 item">' +
				'<input class="input form-control" name="answer[]" id="" placeholder="Enter a answer..."/>' +
				'</div>');
		});
		$('#question_add').click(function () {
			$('#add_question_form').hide();
		})
	});

	$('.question_answer').click(function(){
		var question_id = $(this).data('question-id');
		var answer_id = $(this).data('id');
		var points = parseInt($(this).html());
		$.ajax({
			url: base_url + 'activity/answer_vote/' + question_id + '/' + answer_id,
		}).done(function() {
			console.log(points);
			$('#' + question_id + '_' + answer_id).html(points+=1);
		});
	});
});

