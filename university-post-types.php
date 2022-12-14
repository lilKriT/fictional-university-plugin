<?php
function university_post_types()
{
    // Events
    register_post_type("event", array(
        'public' => true,
        'labels' => array(
            'name' => "Events",
            'add_new_item' => "Add New Event",
            'edit_item' => "Edit Event",
            'all_items' => "All Events",
            'singular_name' => "Event"
        ),
        'menu_icon' => "dashicons-calendar",
        'has_archive' => true,
        'rewrite' => array('slug' => 'events'),
        'supports' => array('title', 'editor', 'excerpt'),
        'show_in_rest' => true,
        "capability_type" => "event",
        "map_meta_cap" => true,
    ));

    // Programs
    register_post_type("program", array(
        'public' => true,
        'labels' => array(
            'name' => "Programs",
            'add_new_item' => "Add New Program",
            'edit_item' => "Edit Program",
            'all_items' => "All Programs",
            'singular_name' => "Program"
        ),
        'menu_icon' => "dashicons-awards",
        'has_archive' => true,
        'rewrite' => array('slug' => 'programs'),
        'supports' => array('title'),
        'show_in_rest' => true,
    ));

    // Professors
    register_post_type("professor", array(
        'public' => true,
        'labels' => array(
            'name' => "Professors",
            'add_new_item' => "Add New Professor",
            'edit_item' => "Edit Professor",
            'all_items' => "All Professors",
            'singular_name' => "Professor"
        ),
        'menu_icon' => "dashicons-welcome-learn-more",
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));

    // Campus
    register_post_type("campus", array(
        'public' => true,
        'labels' => array(
            'name' => "Campuses",
            'add_new_item' => "Add New Campus",
            'edit_item' => "Edit Campus",
            'all_items' => "All Campuses",
            'singular_name' => "Campus"
        ),
        'menu_icon' => "dashicons-location-alt",
        'has_archive' => true,
        'rewrite' => array('slug' => 'campuses'),
        'supports' => array('title', 'editor', 'excerpt'),
        'show_in_rest' => true,
        "capability_type" => "campus",
        "map_meta_cap" => true,
    ));

    // Notes
    register_post_type("note", array(
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => "Notes",
            'add_new_item' => "Add New Note",
            'edit_item' => "Edit Note",
            'all_items' => "All Notes",
            'singular_name' => "Note"
        ),
        'capability_type' => "note",
        'map_meta_cap' => true,
        'menu_icon' => "dashicons-welcome-write-blog",
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    ));

    // Likes
    register_post_type("like", array(
        'public' => false,
        'show_ui' => true,
        'labels' => array(
            'name' => "Likes",
            'add_new_item' => "Add New Like",
            'edit_item' => "Edit Like",
            'all_items' => "All Likes",
            'singular_name' => "Like"
        ),
        'menu_icon' => "dashicons-heart",
        'supports' => array('title'),
        'show_in_rest' => true,
    ));

    // Front Page Slider
    register_post_type("frontPageSlide", array(
        'public' => true,
        'labels' => array(
            'name' => "Front Page Slides",
            'add_new_item' => "Add New Slide",
            'edit_item' => "Edit Slide",
            'all_items' => "All Slides",
            'singular_name' => "Slide"
        ),
        'menu_icon' => "dashicons-images-alt",
        'supports' => array('title', "editor"),
        'show_in_rest' => true,
    ));
}
add_action("init", "university_post_types");
