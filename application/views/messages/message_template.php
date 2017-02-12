<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/20/2016
 * Time: 23:34
 */
$icon = '';
switch ($message_type) {
	case 'danger':
		$icon = 'ban';
		break;
	case 'success':
		$icon = 'check-circle';
		break;
	default :
		$icon = 'check-circle';
		break;
}
?>

<div class="alert alert-<?= $message_type ?> fade in m-t-15">
	<span class="btn-md btn-icon btn-circle pull-left"><i class="fa fa-<?= $icon ?>"></i></span>
	<span class="message-text"><?= $message ?></span>
	<span class="close" data-dismiss="alert">×</span>
</div>