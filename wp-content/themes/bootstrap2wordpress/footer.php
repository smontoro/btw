<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<!--===================SIGN UP SECTION====================-->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 mx-auto">
					<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
					<p><a href="#" class="btn btn-lg btn-success btn-block">Yes, sign me up!</a></p>
					
				</div><!--end col-->
			</div><!--row-->
		</div><!--container-->
		
	</section><!--signup-->

	<!--==================FOOTER=================================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<p><a href="#"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
				</div><!--col-->
				<div class="col-sm-6">
					<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="#">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Contact</a></li>
							<li class="signup-link"><a href="#">Sign up now</a></li>						
						</ul>
					</nav>
				</div><!--col-->
				<div class="col-sm-3">
					<p class="float-right">&copy; 2014 Brad Hussey</p>
				</div><!--col-->
			</div><!--row-->
		</div><!--container-->
	</footer>

	<!--=================MODAL===================================-->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						<i class="fa fa-envelope"></i> 
						Subscrive to our Mailing List
					</h4>
				</div><!-- modal-header-->

				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">your first name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
						</div><!--form group-->
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div><!--form group-->
						<input type="submit" class="btn btn-danger" value="Subscribe!">
					</form>
					<hr>
					<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newletters. <br>No Spam. Just good stuff. We respect your priacy &amp; you may subscribe at any time.</small></p>
				</div><!--modal-body-->

			</div><!--modal content-->
		</div><!--modal dialog-->
	</div><!--modal-->


<?php wp_footer(); ?>

<!--===============BOOTSTRAP CORE JS======================-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script src="<? bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>

</html>