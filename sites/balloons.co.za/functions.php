<?php
	
	add_theme_support( 'post-thumbnails' );  //allows Featured Images for the Index.php to show the Featurettes


	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'freelancer' ),
	) );

?>