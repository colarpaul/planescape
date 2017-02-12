<link rel="stylesheet" href="<?= base_url() ?>app_assets/css/settings.css"/>
<form method="POST" action="<?= base_url() ?>settings/index" name="settings_form" id="settings_form"
	  onsubmit="return check_settings_form()" enctype="multipart/form-data">
	<div class="col-md-12 form-group">
		<div class="col-md-3">
			<div class="profile_img">
				<div class="crop-avatar">
					<div class="avatar-view" style="background-image: url(<?= base_url() . $account_data['path'] ?>)">
						<img style="visibility: hidden;" src="<?= base_url() . $account_data['path'] ?>" height="250" alt="Avatar">
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="col-md-12 padding item form-group">
				<input class="input form-control" name="settings_first_name" id="settings_first_name"
					   placeholder="First Name" type="text"
					   value="<?= set_value('settings_first_name', $account_data['first_name']) ?>"/>
			</div>

			<div class="col-md-12 padding item form-group">
				<input class="input form-control" name="settings_last_name" id="settings_last_name"
					   placeholder="Last Name" type="text"
					   value="<?= set_value('settings_last_name', $account_data['last_name']) ?>"/>
			</div>

			<div class=" col-md-12 padding item form-group">
				<input class="input form-control" name="settings_email" id="settings_email" placeholder="Email Address"
					   type="text"
					   value="<?= set_value('settings_email', $account_data['email']) ?>"/>
			</div>

			<div class=" col-md-12 padding item form-group">
				<input class="input form-control" name="files" id="settings_profile_picture"
					   placeholder="Profile Picture"
					   type="file"/>
			</div>

			<div class="col-md-12 padding">
				<input id="activity_add" class="input button_activity" name="submit" type="submit" value="Save"/>
			</div>
		</div>
	</div>
</form>
<script src="<?= base_url() ?>app_assets/js/settings.js"></script>