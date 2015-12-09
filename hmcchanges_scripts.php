<?php

function theme_name_scripts() {
	wp_enqueue_style( 'style-sheet', plugins_url('assets/style/css/style.css', __FILE__) );
	//wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	//wp_enqueue_script("HMC_changes", plugins_url("assets/scripts/script.js", __FILE__), array(), '1.0.0', true  );
	
	

				
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );