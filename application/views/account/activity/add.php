
<form method="post" action="<?=base_url()?>activity/add" name="add_activity_form" id="add_activity_form" enctype="multipart/form-data" onsubmit="return check_activity_form()">
	<div class="col-md-12 form-group" >
		<div class="input-group col-md-12 item padding">
			<input class="input_text form-control" name="title" id="activity_title" placeholder="Title..." type="text"/>
		</div>

		<div class="input-group col-md-12 item padding">
			<textarea class="input_text form-control" name="description" id="activity_description"
					  placeholder="Enter activity description..."></textarea>
		</div>

		<div class="input-group col-md-12 item padding">
			<input class="input_text form-control" name="address" id="address" placeholder="Address..." type="text"/>
		</div>

		<div class="item form-group">
			<input class="input_text form-control" name="files" id="settings_profile_picture"
				   placeholder="Profile Picture"
				   type="file"/>
		</div>
		<div class="input-group col-md-12 item padding">
			<span class="input-group-addon"><i class="fa fa-calendar-minus-o"></i></span>
			<input placeholder="Start Date..." class="input_date form-control" name="start_date" type="text" id="datepickerStart">
		</div>
		<div class="input-group col-md-12 item padding">
			<span class="input-group-addon"><i class="fa fa-calendar-minus-o"></i></span>
			<input placeholder="End Date..." class="input_date form-control" name="end_date" type="text" id="datepickerEnd">
		</div>
		<div class="input-group col-md-12 padding">
			<input id="activity_add" class="input_text button_activity" name="submit" type="submit" value="Save" onclick="check_activity_form()" />
		</div>
	</div>
</form>
<script src="<?= base_url() ?>app_assets/js/activity.js"></script>