/**
 * Created by Alexandru on 5/21/2016.
 */
function check_settings_form(){
	var form_ok = true;
	if (!$('#settings_first_name').val().length) {
		$('#settings_first_name').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#settings_first_name').parent().removeClass('bad');

	if (!$('#settings_last_name').val().length) {
		$('#settings_last_name').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#settings_last_name').parent().removeClass('bad');

	if (!$('#settings_email').val().length) {
		$('#settings_email').parent().addClass('bad');
		form_ok = false;
	}
	else
		$('#settings_email').parent().removeClass('bad');

	return form_ok;
}