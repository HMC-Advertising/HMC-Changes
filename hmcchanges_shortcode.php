<?php
	//If I need to make any custom shortcodes

	function event_tracking_shortcode(){
		$output="";

		/*$output .='
					 
			<script type ="text/javascript">
				oIMG = document.getElementById("purchase1");
				oIMG.addEventListener("click", function(){ 
				var msgROI = document.createElement("img");
				msgROI.src = "https://secure.fastclick.net/w/roitrack.cgi?aid=1000050346";
				});
			</script>
		';*/
		$output .= "
			<script type='text/javascript'>
				(function($){
					$('#purchase1').on('click', function() {
						var href = $(this).attr('href');
		  				_gaq.push(['_trackEvent', 'Purchase_Button1', 'Clicked', href]);
					});
					$('#purchase2').on('click', function() {
						var href = $(this).attr('href');
	                    _gaq.push(['_trackEvent', 'Purchase_Button2', 'Clicked', href]);
					});
				}(jQuery))
			</script>	

	";

		return $output;
	}

	add_shortcode("event_tracking", "event_tracking_shortcode");

	function tracking($atts){

		$atts = shortcode_atts(
			array(
				'id' => ,
				'category' => ,
				'action' => ,
				'label' =>  
			), $atts,
		);

		$id = $atts["id"];
		$category = $atts["category"];
		$action = $atts["action"];
		$label = $atts["label"];

		$output = "";
		$output .= "";

		$output .= "
			<script type='text/javascript'>
				(function($){
					$('".$id."').on('click', function() {
						var href = $(this).attr('href');
		  				_gaq.push(['".$category."', '".$action."', '".$label."', href]);
					});
				}(jQuery))
			</script>	
		";

		return $output;

	}

	add_shortcode("tracking", "tracking");

?>
