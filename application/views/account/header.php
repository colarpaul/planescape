<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PlanEscape | </title>

	<!-- Bootstrap -->
	<link href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Main -->
	<link href="<?=base_url()?>frontend-assets/css/main.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="<?=base_url()?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- jVectorMap -->
	<link href="<?=base_url()?>assets/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<!-- Custom Theme Style -->
	<link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">
	<link href="<?=base_url()?>app_assets/css/main.css" rel="stylesheet">

	<link href="<?=base_url();?>app_assets/css/activity.css" rel="stylesheet"/>

	<!-- jQuery -->
	<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300&subset=latin,greek,cyrillic,greek-ext,latin-ext,vietnamese,cyrillic-ext' rel='stylesheet' type='text/css'>
	<script>var base_url = '<?=base_url();?>';</script>

</head>

<body class="nav-md">
<?php $session_photo = $this->session->userdata('user_img');?>
<?php $user_user = isset($session_photo) ? $session_photo : "assets/images/user.png";?>
<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="<?=base_url()?>" class="site_title"><img class="logo-img" src="<?=base_url()?>app_assets/images/logo.png" /></a>
					<svg class="logo_small_sidebar" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 62.3 62.3" style="enable-background:new 0 0 62.3 62.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#4D4D4E;}
</style>
						<g id="XMLID_2_">
							<path id="XMLID_36_" class="st0" d="M42.1,23c-0.7-0.7-1.5-1.1-2.2-1.2s-1.5,0.2-2.2,0.9c-0.6,0.6-0.9,1.4-0.8,2.2   c0.1,0.8,0.5,1.7,1.2,2.5l0.1,0l4.1-4.1L42.1,23z"/>
							<path id="XMLID_38_" class="st0" d="M21.8,26.7c-0.7,0-1.3,0.1-1.8,0.4s-0.9,0.7-1.2,1.3v7.7c0.3,0.5,0.7,0.9,1.2,1.1   s1.1,0.4,1.9,0.4c1.2,0,2-0.5,2.5-1.4c0.5-0.9,0.8-2.1,0.8-3.7v-0.3c0-1.7-0.3-3-0.8-4C23.8,27.2,23,26.7,21.8,26.7z"/>
							<path id="XMLID_115_" class="st0" d="M31.2,0C14,0,0,14,0,31.2c0,17.2,14,31.2,31.2,31.2s31.2-14,31.2-31.2C62.3,14,48.4,0,31.2,0z    M29.9,32.6c0,2.6-0.6,4.7-1.8,6.3c-1.2,1.6-2.9,2.4-5.1,2.4c-0.9,0-1.7-0.2-2.5-0.5c-0.7-0.3-1.3-0.8-1.8-1.5v5.1l2.3,0.5v2.9   h-9.3v-2.9l2.3-0.5V26.6l-2.5-0.5v-2.9h6.9l0.2,2.1c0.5-0.8,1.1-1.3,1.9-1.8c0.7-0.4,1.6-0.6,2.5-0.6c2.2,0,3.9,0.9,5.1,2.6   c1.2,1.7,1.8,3.9,1.8,6.7V32.6z M50.7,29.6c-0.5,1.1-1.3,2.1-2.3,3.2c-1.8,1.8-3.8,2.7-6,2.6c-2.2-0.1-4.2-1-6-2.8l-0.5-0.5   c-1.9-1.9-2.9-3.9-3-6.1s0.6-4.2,2.3-5.9c1.7-1.7,3.5-2.5,5.4-2.4c1.9,0.1,3.8,1,5.5,2.7l1.8,1.8l-7.4,7.4l0,0.1   c0.9,0.8,1.8,1.2,2.9,1.2c1,0,1.9-0.4,2.8-1.2c0.7-0.7,1.3-1.4,1.6-2.1s0.6-1.4,0.9-2.3l3,1.2C51.6,27.5,51.3,28.5,50.7,29.6z"/>
						</g>
</svg>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="<?=base_url().$user_user;?>" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
					<h1><?php //$this->session->userdata('username');?></h1>
					<h2><?=ucfirst($this->session->userdata('username'));?></h2>
					</div>
				</div>
				<!-- /menu profile quick info -->

				<br/>

				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<div class="clearfix"></div>
						<ul class="nav side-menu">
							<li><a href="<?=base_url()?>dashboard">
									<i class="fa fa-home"></i> Home Feed </a>
							</li>
							<li><a href="<?=base_url()?>activity/add">
									<i class="fa fa-calendar"></i> Create An Event </a>
							</li>

							<li><a href="<?=base_url()?>activity/upcoming">
									<i class="fa fa-bullhorn"></i> Upcoming Events </a>
							</li>

							<li><a href="<?=base_url()?>activity/ended">
									<i class="fa fa-history"></i> Past Events </a>
							</li>

							<li><a href="<?=base_url()?>invitation" class="hiperlink-not-active">
									<i class="fa fa-send-o"></i> Invitations <div class="coming-soon">Soon</div> </a>
							</li>

							<li><a href="<?=base_url()?>gallery/" class="hiperlink-not-active">
									<i class="fa fa-picture-o"></i> Galleries <div class="coming-soon">Soon</div> </a>
							</li>

							<li><a href="<?=base_url()?>settings">
									<i class="fa fa-cogs"></i> Settings </a>
							</li>

							<li><a href="<?=base_url()?>account/logout">
									<i class="fa fa-sign-out"></i> Logout </a>
							</li>
						</ul>
					</div>

				</div>
				<!-- /sidebar menu -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">

			<div class="nav_menu">
				<nav class="" role="navigation">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
							   aria-expanded="false">

								<img src="<?=base_url().$user_user;?>" alt=""><?=$this->session->userdata('username');?>
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
								<li>
									<a href="<?=base_url()?>settings">
										<span>Settings</span>
									</a>
								</li>
								<li><a href="<?=base_url()?>account/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</li>
							</ul>
						</li>

						<?php $this->load->view('messages/notifications')?>

					</ul>
				</nav>
			</div>

		</div>
		<!-- /top navigation -->


		<!-- page content -->
		<div class="right_col" role="main">
<?php $this->load->view('account/header-parts/messages'); ?>