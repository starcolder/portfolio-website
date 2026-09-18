<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main_menu' => 'navbar'
    ));
}

add_action('init', 'register_my_menus');

// register customized post type
function wpdocs_codex_project_init()
{
    $labels = array(
        'name'                  => _x('projects', 'Post type general name', 'my_theme'),
        'singular_name'         => _x('project', 'Post type singular name', 'my_theme'),
        'menu_name'             => _x('projects', 'Admin Menu text', 'my_theme'),
        'name_admin_bar'        => _x('project', 'Add New on Toolbar', 'my_theme'),
        'add_new'               => __('Add New', 'my_theme'),
        'add_new_item'          => __('Add New project', 'my_theme'),
        'new_item'              => __('New project', 'my_theme'),
        'edit_item'             => __('Edit project', 'my_theme'),
        'view_item'             => __('View project', 'my_theme'),
        'all_items'             => __('All projects', 'my_theme'),
        'search_items'          => __('Search projects', 'my_theme'),
        'parent_item_colon'     => __('Parent projects:', 'my_theme'),
        'not_found'             => __('No projects found.', 'my_theme'),
        'not_found_in_trash'    => __('No projects found in Trash.', 'my_theme'),
        'featured_image'        => _x('project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'my_theme'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'my_theme'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'my_theme'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'my_theme'),
        'archives'              => _x('project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'my_theme'),
        'insert_into_item'      => _x('Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'my_theme'),
        'uploaded_to_this_item' => _x('Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'my_theme'),
        'filter_items_list'     => _x('Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'my_theme'),
        'items_list_navigation' => _x('projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'my_theme'),
        'items_list'            => _x('projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'my_theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'project'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom_fields'),
    );

    register_post_type('project', $args);
}

add_action('init', 'wpdocs_codex_project_init');
