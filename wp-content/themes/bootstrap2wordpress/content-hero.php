<?php

//Custom Fields
$prelaunch_price   = get_post_meta( 9, 'prelaunch_price', true );
$launch_price   = get_post_meta( 9, 'launch_price', true );
$final_price   = get_post_meta( 9, 'final_price', true );
$course_url 	= get_post_meta( 9, 'course_url', true);
$button_text	= get_post_meta( 9, 'button_text', true);


?>


<!--=============HERO===================-->
	<section id="hero" data-type="background" data-speed="2">
		<article>
			<div class="container clearfix">
				<div class="row">
					<div class="col-sm-5">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
					</div><!--col-->
					<div class="col-sm-7 hero-text">
						<h1><?php bloginfo('name'); ?></h1>
						<p class="lead"><?php bloginfo('description'); ?></p>

						<div id="price-timeline">
							<div class="price active">
								<h4>Pre-Launch Price <small>Ends soon!</small></h4>
								<span><?php echo $prelaunch_price; ?></span>
							</div><!--price-->

							<div class="price">
								<h4>Launch Price <small>Coming soon!</small></h4>
								<span><?php echo $launch_price; ?></span>
							</div><!--price-->

							<div class="price">
								<h4>Final Price <small>Coming soon!</small></h4>
								<span><?php echo $final_price; ?></span>
							</div><!--price-->
						</div><!--price-timeline-->
						<button class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><a><?php echo $button_text; ?></a></button>
					</div><!--col-->

				</div><!--row-->
			</div><!--container-->
		</article>
		
	</section><!--hero-->