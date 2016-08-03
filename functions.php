<?php

/*********************/
/* Load dependencies */
/*********************/
function enqueue_newriot_dependencies(){
  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
  wp_enqueue_style( 'google fonts', 'https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Julius+Sans+One' );
  wp_enqueue_style( 'new-riot-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'enqueue_newriot_dependencies');
