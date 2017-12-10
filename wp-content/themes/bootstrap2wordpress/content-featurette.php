<?php 

$video_title = get_field('video_title');
$video_link = get_field('video_link');

 ?>

 	<!--==================VIDEO FEATURETTE================-->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 mx-auto">
					<h2><?php echo $video_title; ?></h2>
					<?php echo $video_link; ?>
				</div><!--end col--> 
			</div><!--row-->
		</div><!--container-->
	</section><!--featurette-->
