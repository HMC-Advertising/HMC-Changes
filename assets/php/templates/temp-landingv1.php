<?php
/* 
	Template Name: Landing Page V1 ApresSki 
*/
	get_header();
	$weather = $_GET["weather"];
?>

<section id="apriski" class="landingpage">
	<!-- header -->
	<?php if(isset($weather)): ?>
		<div class="row header weather">
			<div class="col-lg-12">
				<div class="container">
					
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="row header">
			<div class="col-lg-12">
				<div class="container">
					<div class="col-lg-9">
						<h1>Experience Our White Carpet Treatment.</h1>
						<h2>We're rolling it out all winter long.</h2>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>	
	<!-- \header -->

	<!-- Brand -->
	<div class="row brand">
		<div class="col-lg-12">
			<div class="container">
			</div>
		</div>
	</div>
	<!-- \Brand -->

	<!-- Bypass -->
	<div class="row bypass">
		<div class="col-lg-12">
			<div class="container">
			</div>
		</div>
	</div>
	<!-- /Bypass -->

	<!-- Seize -->
	<div class="row seize">
		<div class="col-lg-12">
			<div class="container">
			</div>
		</div>
	</div>
	<!-- /Seize -->

	<!-- Lodging -->
	<div class="row lodging">
		<div class="col-lg-12">
			<div class="container">
			</div>
		</div>
	</div>
	<!-- /Lodging -->

</section>





<?php get_footer(); ?>