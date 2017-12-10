<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--Bootstrap core CSS -->
	<!--FONTS-->
	<link rel="stylesheet" href="https://use.typekit.net/rfb3ycg.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?> /assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--STYLE SHEETS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<?php wp_head(); ?>

	<!--HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

   	<!--[if lt IE 9]>
	   	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!--================HEADER==================-->
	<header>
		<!--=====NAVBAR===========-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
		  <a class="navbar-brand" href="#">
		  	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!--If the menu (WP admin area) is not set, then the "menu_class" is applid to "container". In other words, it overwrites the "container_class". -->

		  <div class="ml-auto">

		  <?php
		  	wp_nav_menu( array(
		  		'theme_location'  => 'primary',
		  		'container' 	  => 'nav',
		  		'container_class' => 'navbar-collapse collapse',
		  		'menu_class'      => 'nav navbar-nav navbar-right'
		  	)
		  	);
		  ?>

		</div>


		</nav><!--END NAVBAR-->
	</header>


