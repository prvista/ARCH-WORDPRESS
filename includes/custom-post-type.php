<?php

function arch_custom_post(){
    $project_label = array(
        'name'     => __('Projects', 'textdomain'),
        'singular_name' => __('Project', 'textdomain'),
        'add_new'    => __('Add Project', 'textdomain'),
        'edit_item'   => __('Edit Project', 'textdomain'),
        'add_new_item' => __('Add New Project', 'textdomain'),
        'all_items'   => __('Projects', 'textdomain'),
    );
    $project = array(
        'labels' => $project_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail')
    );
    register_post_type('projects', $project);




    $service_label = array(
        'name'     => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new'    => __('Add Service', 'textdomain'),
        'edit_item'   => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items'   => __('Services', 'textdomain'),
    );
    $service = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor')
    );
    register_post_type('services', $service);


}
add_action('init', 'arch_custom_post');
