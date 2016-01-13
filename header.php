<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
	<!-- デフォ --><link rel="stylesheet" media="screen and (min-width: 1000px)" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- タブ横 and (orientation:landscape) --><link rel="stylesheet" media="screen and (max-width: 999px) and (min-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/style_tab.css" type="text/css">
	<!-- タブ縦 and (orientation:portrait) --><link rel="stylesheet" media="screen and (max-width: 999px) and (min-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/style_tab.css" type="text/css">
	<!-- スマホ --><link rel="stylesheet" media="screen and (max-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/style_sp.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">

<header>

<div class="menushade smartphone"></div>

	<nav class="header_nav">
		<span class="smartphone toggle_nav_i">
			<i class="fa fa-align-justify"></i>
		</span>
		<div class="container_mt0">
			<i class="smartphone fa fa-times"></i>
			<?php wp_nav_menu(); ?>
			<ul class="smartphone">
				<li>9-9-99</li><li>width and height BLD.4F</li><li>Makishi Naha-city</li><li>Okinawa</li>
				<li>Tel: 098-17777-7777</li>
				<li>OPEN 10:30~20:00</li>
				<li>Crose on Thursday</li>
			</ul>
		</div>
	</nav>

<div class="clear"></div>

<div id="home_header_img_container">
	<div class="header_bgi_home">
		<img class="header_title_home_img" src="<?php echo get_template_directory_uri(); ?>/material/ledberry1.jpg" alt="">
	</div>
</div>
</header>


<div class="clear"></div>

	<div class="container" id="content">

<div class="clear"></div>



















