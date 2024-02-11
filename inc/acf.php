<?php 
// add option use ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Setting',
		'menu_title'	=> 'Site Setting',
		'menu_slug' 	=> 'theme-option-settings',
		'capability'	=> 'edit_theme_options',
		'position'		=> 40,
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-option-settings',
		'capability'	=> 'edit_theme_options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Common Content',
		'menu_title'	=> 'Common',
		'parent_slug'	=> 'theme-option-settings',
		'capability'	=> 'edit_theme_options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-option-settings',
		'capability'	=> 'edit_theme_options',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme 404 Settings',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-option-settings',
		'capability'	=> 'edit_theme_options',
	));
}
?>