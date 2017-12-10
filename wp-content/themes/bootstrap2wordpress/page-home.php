<?php
/**
	Template Name: Home Page
 */	

get_header(); ?>

<!--=============HERO===================-->
	<?php get_template_part('content', 'hero'); ?>

	<!--=============OPT IN SECTION============-->
	<?php get_template_part('content', 'optin'); ?>

	<!--=================BOOST YOUR INCOME==============-->
	<?php get_template_part('content', 'boost'); ?>

	<!--=================WHO BENEFITS=================-->
	<?php get_template_part('content', 'benefits'); ?>

	<!--==================COURSE FEATURES================-->
	<?php get_template_part('content', 'coursefeatures'); ?>

	<!--===============PROJECT FEATURES==================-->
	<?php get_template_part('content', 'projectfeatures'); ?>

	<!--==================VIDEO FEATURETTE================-->
	<?php get_template_part('content', 'featurette'); ?>

	<!--=====================INSTRUCTOR====================-->
	<?php get_template_part('content', 'instructor'); ?>
	
	<!--====================TESTIMONIALS===================-->
	<?php get_template_part('content', 'testimonials'); ?>


<?php get_footer(); ?>
