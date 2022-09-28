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
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    ));
}
add_action("init", "university_post_types");
