<?php
    // Tournament post type
function custom_tournaments_post() {
    $labels = array(
        'name'               => _x('Tournaments', 'post type general name', 'ifmyespts'),
        'singular_name'      => _x('Tournament', 'post type singular name', 'ifmyespts'),
        'menu_name'          => _x('Tournaments', 'admin menu', 'ifmyespts'),
        'name_admin_bar'     => _x('Tournament', 'add new on admin bar', 'ifmyespts'),
        'add_new'            => _x('Add New', 'tournament', 'ifmyespts'),
        'add_new_item'       => __('Add New Tournament', 'ifmyespts'),
        'new_item'           => __('New Tournament', 'ifmyespts'),
        'edit_item'          => __('Edit Tournament', 'ifmyespts'),
        'view_item'          => __('View Tournament', 'ifmyespts'),
        'all_items'          => __('All Tournaments', 'ifmyespts'),
        'search_items'       => __('Search Tournaments', 'ifmyespts'),
        'parent_item_colon'  => __('Parent Tournaments:', 'ifmyespts'),
        'not_found'          => __('No tournaments found.', 'ifmyespts'),
        'not_found_in_trash' => __('No tournaments found in Trash.', 'ifmyespts'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __('Description of your tournaments.', 'ifmyespts'),
        'public'             => true,
        'menu_icon'          => 'dashicons-games',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tournaments'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('tournaments', $args);
}

add_action('init', 'custom_tournaments_post');
?>