<?php 

add_action( 'wp_enqueue_scripts', 'divichild_enqueue_assets' ); 

function divichild_enqueue_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 

} 
