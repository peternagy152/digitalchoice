<?php 
// Primary Theme options 
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Top Header',
		'menu_title'	=> 'Top Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header & Footer',
		'menu_title'	=> 'Header & Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

//! create FAQs Custom Post 

function Faqs() {

	$supports = array(
		'title', // post title
		'editor' , 

	);

	$labels = array(
		'name' => _x('FAQs', 'plural'),
		'singular_name' => _x('FAQ', 'singular'),
		'menu_name' => _x('FAQs', 'admin menu'),
		'name_admin_bar' => _x('FAQs', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New FAQ'),
		'new_item' => __('New FAQ'),
		'edit_item' => __('Edit FAQ'),
		'view_item' => __('View FAQs'),
		'all_items' => __('All FAQs'),
		'search_items' => __('Search FAQ'),
		'not_found' => __('No FAQs found.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'branch'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	register_post_type('faq', $args);
}

add_action('init', 'Faqs');

function get_faqs() {
    global $wpdb; 
    $faqs = $wpdb->get_results("SELECT * FROM {$wpdb->posts} WHERE post_type = 'faq' AND post_status = 'publish'");
    return $faqs; 
}
