<?php
/*
Plugin Name: Pritect ExampleLoader with Git Submodule
Version: 0.0.1
Author Name: James Golovich
License: GPL2
*/

add_action( 'plugins_loaded', 'pritect_exampleloader_with_submodule_startup' );
add_action( 'init', 'pritect_exampleloader_with_submodule_go' );

function pritect_exampleloader_with_submodule_startup() {

	require_once 'includes/Pritect-ExampleLoader/example-loader.php';
}

function pritect_exampleloader_with_submodule_go() {
	$PAK = pritect_example_loader( array(), '1.0.0' );
	$PAKnewest = pritect_example_loader();
	$a = 1;
}
