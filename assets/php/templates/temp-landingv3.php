<?php
/* 
	Template Name: Landing Page V3 NextGen
*/
	get_header();
?>

<section id="nextgen" class="landingpage Winter">

	<!-- Seize -->
	<div class="seize">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<h1>Seize the mountain!</h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>Purchase your lift ticket online for the best rate and go Direct-to-Lift for every day you load or re-load on your Evolution Stowe Card (ESC). After all, you’re here to ride your line.  Not wait in one. </p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="https://www.stoweonestore.com/eStore/Content/Commerce/Products/DisplayProducts.aspx?ProductGroupCode=1000002&ProductCategoryCode=826" target="_blank" class="button red" id="Next_Ready">Ready. Set. Ski!</a>
					<p class="note">Please Note: Lift access products are non-refundable and non-transferable</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /Seize -->
	<!-- Bypass -->
	<div class="bypass">
		<div class="col-lg-12">
			<div class="container">
				<div class="col-lg-12">
					<img src="<?php echo plugins_url('/HMCchanges_plugin/assets/img/bypassLogo.png'); ?>">
					<h1>A legendary experience awaits. Without the wait. </h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>ByPass is a feature you can add to your evolution card. And it’s as easy as: Add. Grab. And Go!</p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>

					
					<a href="/ski-ride/bypass/" class="button red" id="Next_Discover">Discover the Benefits</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Bypass -->

	<!-- header -->
	
		<div class="header">
			<div class="col-lg-12">
				<div class="container">
					<div class="col-md-7 pull-right right">
						<h1>It’s adrenaline season at Stowe. </h1>
						<h2>Act accordingly.</h2>
					</div>
				</div>
			</div>
		</div>

	<!-- \header -->

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
					<h1>Take me to my room.</h1>
					<section class="r">
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
						<div class="col-lg-8"><p>
We have the perfect room waiting for you and your every need. From our Classic Guest Room to all-out luxury Mountain Cabins, we’ve got you covered. </p>
						</div>
						<div class="col-lg-2 hidden-sm hidden-xs"></div>
					</section>
					
					<a href="/plan/lodging/" class="button red" id="Next_Book">Book Now</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Lodging -->

</section>

<script type='text/javascript'>
	(function($){
		$('#Next_Book').on('click', function() {
			var href = $(this).attr('href');
				_gaq.push(['_trackEvent', 'Next', 'Book', href]);
		});
		$('#Next_Discover').on('click', function() {
			var href = $(this).attr('href');
	        _gaq.push(['_trackEvent', 'Next', 'Discover', href]);
		});
		$('#Next_Ready').on('click', function() {
			var href = $(this).attr('href');
	        _gaq.push(['_trackEvent', 'Next', 'Ready', href]);
		});
	}(jQuery))
</script>



<?php get_footer(); ?>