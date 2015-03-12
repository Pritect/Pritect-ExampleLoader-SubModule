<?php
/*
Plugin Name: Pritect ExampleLoader with Git Submodule
Version: 0.0.1
Author Name: James Golovich
License: GPL2
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

require_once 'includes/Pritect-ExampleLoader/example-loader.php';

add_action( 'init', 'pritect_exampleloader_with_submodule_go' );

function pritect_exampleloader_with_submodule_go() {
	$PAK = pritect_example_loader( array(), '1.0.0' );
	$PAKnewest = pritect_example_loader();
	$a = 1;
}
