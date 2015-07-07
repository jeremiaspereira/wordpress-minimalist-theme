	<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="A basic theme in Wordpress">
		<meta name="author" content="Jeremias Pereira | jeremiastpereira@gmail.com">
		<title><?php wp_title( '| Minimalist', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.3.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="row">
	   				<div class="col-sm-12 col-md-12">
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri();?>/images/logo.png" width="60">
							</a>
						</div>
					</div>
				</div>
				<div class="menu-header">
	  				<div class="row">
						<div class="col-sm-12 col-md-12">
							<span id="btnBars" class="tabs-menu"></span>
							<div id="menuHeader">
								<?php
									if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
	 							    	 wp_nav_menu( array( 'theme_location' => 'primary-menu') );
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="main-area">


