<?php
 
require( '../cm/wp-load.php' );
$home_carousel = new WP_Query( 'category_name=home_carousel' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="../../favicon.ico">

<title>Vips.com - Visually Impaired Preschool Services</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/navbar-fixed-top.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
<link href="css/vips.css" rel="stylesheet">

</head>

<body>

	<div id="header"></div>

	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class=" pc no-padding">
			<div id="carousel-example-generic" class="carousel slide"
				data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php
					   $counter = 0; 
					   while ( $home_carousel->have_posts() ) {
	                           $home_carousel->the_post();
	                           if ($counter == 0) {
	                              echo '<div class="item active">';
	                           }else{
	                              echo '<div class="item">';
	                           }
	                          
	                            echo get_the_content();
	                           echo '</div>';
	                          $counter++;
                         }
                         
                         wp_reset_postdata();
					?>

				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic"
					role="button" data-slide="prev"> <span
					class="glyphicon glyphicon-chevron-left"></span>
				</a> <a class="right carousel-control" href="#carousel-example-generic"
					role="button" data-slide="next"> <span
					class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>



		<div class="container marketing">

			<!-- Three columns of text below the carousel -->
			<div class="row">
			
					<?php
					   $home_features = new WP_Query( 'category_name=home_features' );
					   $counter = 0; 
					   while ( $home_featuresl->have_posts() ) {
	                           $home_features->the_post();
	                           if ($counter == 0) {	                             
	                              echo '<div class="col-lg-4 green center-margin vips-highlight">';
	                                echo get_the_content();
	                              echo '</div>';
	                           }else if ($counter == 1) {	 
	                              echo '<div class="col-lg-4 yellow center-margin vips-highlight">';
	                                echo get_the_content();
	                              echo '</div>';
	                           }else if ($counter == 2) {	 
	                              echo '<div class="col-lg-4 red center-margin vips-highlight">';
	                                echo get_the_content();
	                              echo '</div>';
	                           }
	                           
	                          $counter++;
                         }
                         
                         wp_reset_postdata();
					?>			

			</div>
			<!-- /.row -->
			<!-- START THE FEATURETTES -->

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading vips-h2">
						<span class="text-muted">MISSION STATEMENT</span>
					</h2>
					<p class="lead">Visually Impaired Preschool Services (VIPS)
						empowers families by providing educational excellence to young
						children with visual impairments in order to build a strong
						foundation for reaching their highest potential.</p>
				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive img-rounded"
						alt="Mission Statement"
						src="images/vips/kids/homepage/IMG_0872.jpg" />
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-5">
					<img class="featurette-image img-responsive"
						alt="Mission Statement"
						src="images/vips/kids/homepage/IMG_0796.jpg" />
				</div>
				<div class="col-md-7">
					<h2 class="featurette-heading vips-h2">
						<span class="text-muted">You've learned that your child has
							a serious vision problem. </span>
					</h2>
					<p class="lead">It is not uncommon to experience a number of
						emotions, such as grief, fear, sadness, and even anger. You may
						feel a sense of loss because you believe that the dreams or
						expectations you had for your child are no longer possible.</p>
					<p class="lead">In one form or another, you may be asking
						yourself two questions: “What am I going to do now?” and “Where do
						I go from here?” Your situation may be different, but it is not
						unique. Many families have asked those same questions when faced
						with the same situation. Children with visual impairments are
						children first. They need the same types of experiences as other
						children. They need to have friends, to play in sandboxes, to
						swing on swings, to go to new places. They need to be part of
						family routines and activities.</p>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading vips-h2">
						<span class="text-muted">Visually Impaired Preschool
							Services </span>
					</h2>
					<p class="lead">is an agency (VIPS) that has been designed to
						help you and your child through these very important early years
						when children are so ripe for learning. Without sight, your child
						will need to gather information about the world in different ways.
						VIPS will show you how to help your child use remaining vision and
						other senses to learn about the world. We want to help you feel
						good about your child and to help your child build the self-esteem
						that will be so necessary for the progress he or she will make.</p>

				</div>
				<div class="col-md-5">
					<img class="featurette-image img-responsive img-rounded"
						alt="Mission Statement"
						src="images/vips/kids/homepage/IMG_0848.jpg" />
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-5">
					<img class="featurette-image img-responsive img-rounded"
						alt="Mission Statement"
						src="images/vips/kids/homepage/IMG_0983.jpg" />
				</div>
				<div class="col-md-7">
					<h2 class="featurette-heading vips-h2">
						<span class="text-muted">VIPS provides a variety of
							programs and services.</span>
					</h2>
					<p class="lead">VIPS serves blind or visually impaired infants,
						toddlers, and preschoolers who live within a 50-mile radius of
						Louisville, including several counties in Southern Indiana,
						through the VIPS-Louisville Office. Children, who live in central
						Kentucky, within a 50-mile radius of Lexington, are served by the
						VIPS-Central KY Office. Children (birth to 3), who live within a
						60-mile radius of Bloomington, IN are served by the VIPS-Indiana
						Office, including Bloomington, Bedford, Columbus, and
						Indianapolis.VIPS also has an Outreach Program to serve children
						and families who reside in other areas throughout Kentucky and
						Indiana.</p>
					<p class="lead">VIPS staff includes certified teachers who
						specialize in early childhood education, visual impairment, O&M,
						and special education. Several staff members are also parents of
						visually impaired children. VIPS is led by a dedicated volunteer
						Board of Directors, who are professionals in the field of visual
						impairment, medical professionals, community and business leaders,
						representatives of consumer groups of the blind, and VIPS parents.</p>
				</div>
			</div>

			<!-- /END THE FEATURETTES -->


			<!-- FOOTER -->
			<div id="footer"></div>

		</div>
		<!-- /.container -->

	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/vips.js"></script>
	<script src="js/home.js"></script>
</body>
</html>
