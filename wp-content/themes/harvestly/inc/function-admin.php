<?php

/*

@package harvestlytheme

	===========================
		ADMIN PAGE
	===========================
*/

function harvestly_add_admin_page() {

	// Generate Harvestly Admin Page
	add_theme_page( 'Harvestly Theme Info', 'Harvestly Info', 'manage_options', 'harvestly-options', 'harvestly_theme_create_page' );
}
add_action( 'admin_menu', 'harvestly_add_admin_page' );

function harvestly_theme_create_page() {
	// generation of our admin page
	echo '<h1>Harvestly Theme Options</h1>';
}
