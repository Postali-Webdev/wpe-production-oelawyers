<?php
/**
 * Custom Case Results Custom Post Type
 *
 * @package Postali Parent
 * @author Postali LLC
 */

function create_custom_post_type_results() {

// set up labels
    $labels = array(
        'name' => 'Results',
        'singular_name' => 'Result',
        'add_new' => 'Add New Case Result',
        'add_new_item' => 'Add New Case Result',
        'edit_item' => 'Edit Results',
        'new_item' => 'New Results',
        'all_items' => 'All Results',
        'view_item' => 'View Results',
        'search_items' => 'Search Case Results',
        'not_found' =>  'No Results Found',
        'not_found_in_trash' => 'No Results found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Case Results',

    );
    //register post type
    register_post_type( 'Results', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-analytics',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite'      => array('slug' => 'case-results', 'with_front' => false)
        )
    );
}

// Register Custom Taxonomy
function result_topic() {

	$labels = array(
		'name'                       => _x( 'Result Topic', 'Result Topics' ),
		'singular_name'              => _x( 'Result Topic', 'Result Topic' ),
		'menu_name'                  => __( 'Result Topic' ),
		'all_items'                  => __( 'All Result Topics' ),
		'new_item_name'              => __( 'New Result Topic' ),
		'add_new_item'               => __( 'Add Result Topic' ),
		'edit_item'                  => __( 'Edit Result Topic' ),
		'update_item'                => __( 'Update Result Topic' ),
		'view_item'                  => __( 'View Result Topic' ),
		'separate_items_with_commas' => __( 'Separate Result Topics with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Result Topics' ),
		'popular_items'              => __( 'Popular Result Topics' ),
		'search_items'               => __( 'Search Result Topics' ),
		'not_found'                  => __( 'Not Found' ),
		'no_terms'                   => __( 'No Result Topics' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'      => array('slug' => 'case-results/result_topic', 'with_front' => false)
	);
	register_taxonomy( 'result_topic', array( 'results' ), $args );

}
add_action( 'init', 'result_topic', 0 );
add_action( 'init', 'create_custom_post_type_results' );