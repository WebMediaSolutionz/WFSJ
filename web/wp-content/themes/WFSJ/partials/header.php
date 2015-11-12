<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title>

		<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/images/dot.ico" type="image/gif" sizes="16x16"> 

		<!-- CSS libraries -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/Styles/lib/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/Styles/lib/scrollToTop.css" />
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/Styles/lib/easing.css" />
    	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato' />

    	<!-- website styles -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style.css" />

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="outer_container<?php echo $banner; ?>">
				<div class="container">
					<a class="logo pull-right" href="<?php echo get_page_link( 5 ); ?>"><span><?php echo SITE_NAME; ?></span></a>
					<div class="clearfix"></div>
					<nav class="pull-right">
						<ul>
							<li><a <?php echo is_page( 5 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 5 ); ?>"><span>Home</span></a></li>
							<li><a <?php echo is_page( 7 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 7 ); ?>"><span>About the WFSJ</span></a></li>
							<li><a <?php echo is_page( 10 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 10 ); ?>"><span>About the initiative</span></a></li>
							<li><a <?php echo is_page( 12 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 12 ); ?>"><span>About the team</span></a></li>
							<li><a <?php echo is_page( 14 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 14 ); ?>"><span>Partners and supporters</span></a></li>
							<li><a <?php echo is_page( 16 ) ? "class='current'" : ""; ?> href="<?php echo get_page_link( 16 ); ?>"><span>Contact us</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<div class="main_container">
			<div class="outer_container">
				<div class="container">
					<?php include_once( 'navigation.php' ); ?>

					<div class="content">