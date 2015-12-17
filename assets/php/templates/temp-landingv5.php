<?php
/* 
	Template Name: Landing Page V5 
*/
	get_header();
	$weather = $_GET["weather"];
?>

<section id="snowNextGen" class="landingpage Winter">
	<!-- header -->
	<div class="header">
			<div class="col-lg-12">
				<div class="container">
					<div class="col-xs-12 col-sm-8">
						<h1>Stowe just got a fresh coat. </h1>
						<h2>Conditions are ideal! Purchase your lift ticket online. Get the best rate. And go Direct-to-Lift for every day you load or re-load on your Evolution Stowe Card (ESC).</h2>
						<a href="https://www.stoweonestore.com/eStore/Content/Commerce/Products/DisplayProducts.aspx?ProductGroupCode=1000002&ProductCategoryCode=826" target="_blank" class="button red">Ready. Set. Ski!</a>
						<p class="note">Please Note: Lift access products are non-refundable and non-transferable </p>
						
					</div>
				</div>
			</div>
		</div>
	<!-- \header -->

	<!-- Bypass -->
	<div class="bypass">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/bypassLogo.png'); ?>">
					<h1>A legendary experience awaits. Without the wait. </h1>
					<section class="r">
						<div class="col-lg-3 hidden-sm hidden-xs"></div>
						<div class="col-lg-6"><p>ByPass is a feature you can add to your Evolution Stowe Card. And it’s as easy as: Add. Grab. And Go!</p>
						</div>
						<div class="col-lg-3 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="/ski-ride/bypass/" class="button red">Discover the Benefits</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Bypass -->

	

	<!-- Brand -->
	<div class=" brand">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<p>From world-class accommodations, dining, and spa treatments, to Vermont’s legendary terrain and everything in-between, the ultimate mountain experience is yours for the taking. Take it.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- \Brand -->

	<!-- Lodging -->
	<div class="lodging">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Take me to my room</h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>We have the perfect room waiting for you and your every need. From our Classic Guest Room to all-out luxury Mountain Cabins, we’ve got you covered.</p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="/plan/lodging/" class="button red">Book Now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Lodging -->

</section>





<?php get_footer(); ?>