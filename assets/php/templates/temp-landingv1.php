<?php
/* 
	Template Name: Landing Page V1 ApresSki 
*/
	get_header();
	$weather = $_GET["weather"];
?>

<section id="apriski" class="landingpage Winter">
	<!-- header -->
	<?php if(isset($weather)): ?>
		<div class="header weather">
			<div class="col-lg-12">
				<div class="container">
					
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="header">
			<div class="col-lg-12">
				<div class="container">
					<div class="col-sm-9">
						<h1>Experience our white carpet treatment.</h1>
						<h2>We’re rolling it out all winter long.</h2>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>	
	<!-- \header -->

	<!-- Brand -->
	<div class=" brand">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<p>Whatever you crave, we’ve got it all. From world-class dining, drinks and cocktails, to Vermont’s legendary terrain and everything in-between, the ultimate mountain experience is yours for the taking. Take it. </p>
				</div>
			</div>
		</div>
	</div>
	<!-- \Brand -->

	<!-- Triangle -->
	<div class="triangle">
		<div class="col-lg-12">
			<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/triangle.png');
			//plugins_url('/HMCchanges_stowe/assets/img/triangle.png'); ?>">
		</div>
	</div>
	<!-- \Triangle -->

	<!-- Bypass -->
	<div class="bypass">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/bypassLogo.png');
					//plugins_url('/HMCchanges_stowe/assets/img/bypassLogo.png'); ?>">
					<h1>A legendary experience awaits.Without the wait. </h1>
					<p>ByPass is a feature you can add to your evolution card. And it’s as easy as: Add. Grab. And Go!</p>
					<a href="#" class="button red">Discover the Benefits</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Bypass -->

	<!-- Seize -->
	<div class="seize">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Seize the mountain!</h1>
					<p>Grab your Evolution Stowe Card and go Direct-to-Lift for everyday you load online.</p>
					<a href="#" class="button red">Ready. Set. Ski!</a>
					<p class="note">Please Note: Lift access products are non-refundable and non-transferable</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Seize -->

	<!-- Lodging -->
	<div class="lodging">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Take Me to My Room</h1>
					<p>We have the perfect room waiting for you and your every need. From the Classic Guest Room to our Mountain Cabins, we’ve got you covered. </p>
					<a href="#" class="button red">Book Now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Lodging -->

</section>





<?php get_footer(); ?>