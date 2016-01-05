<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">

<header>
	<nav>
		<div class="container_mt0">
			<?php wp_nav_menu(); ?>
		</div>
	</nav>

<div class="container">
	<div class="clear"></div>
	<!-- <div class="header_title"><?php bloginfo('name'); ?></div> --><!-- ホーム以外表示の小さいタイトル -->
	<div class="header_title_home"><?php bloginfo('name'); ?></div><!-- ホームのみ表示のタイトル -->

</div>
</header>






































































