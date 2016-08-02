<?php

/*********************/
/* Load dependencies */
/*********************/
function enqueue_newriot_dependencies(){
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_newriot_dependencies');
