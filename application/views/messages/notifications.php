<li role="presentation" class="dropdown">
	<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
	   aria-expanded="false">
		<i class="fa fa-envelope-o"></i>
		<span class="badge bg-green"><?= count($notifications) ?></span>
	</a>
	<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
		<?php if (count($notifications)): ?>
			<?php foreach ($notifications as $notification): ?>
				<li>
					<a>
				<span class="image">
					<img src="<?= base_url() . $notification['path']; ?>" alt="Profile Image"/>
				</span>
				<span>
					<span>New event invitation</span>
					<span class="time">3 mins ago</span>
				</span>
						<div>&nbsp;</div>
				<span class="message">You've been invited to <b><?= $notification['title'] ?></b> event
				</span>
					</a>

					<div class="notification-overlay">
						<div class="half">
							<div class="action">
								<a href="<?=base_url()?>activity/accept_invite/<?=$notification['hash']?>">Accept</a>
							</div>
						</div>
						<div class="half">
							<div class="action white">
								<a href="<?=base_url()?>activity/view/<?=$notification['id']?>">View</a>
							</div>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
			<li>
				<div class="text-center">
					<a href="javascript:void(0);">
						<strong>See All Invitations</strong>
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</li>
		<?php else: ?>
			<li>
				You don't have any notifications
			</li>
		<?php endif; ?>
	</ul>
</li>