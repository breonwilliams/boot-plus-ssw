<?php
/**
 * Created by PhpStorm.
 * User: breon
 * Date: 12/4/16
 * Time: 8:40 AM
 */

function cptui_register_my_taxes() {

    /**
     * Taxonomy: Course Categories.
     */

    $labels = array(
        "name" => __( 'Course Categories', '' ),
        "singular_name" => __( 'Course Category', '' ),
    );

    $args = array(
        "label" => __( 'Course Categories', '' ),
        "labels" => $labels,
        "public" => true,
        "hierarchical" => true,
        "label" => "Course Categories",
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => array( 'slug' => 'course_category', 'with_front' => true, ),
        "show_admin_column" => false,
        "show_in_rest" => false,
        "rest_base" => "",
        "show_in_quick_edit" => false,
    );
    register_taxonomy( "course_category", array( "courses" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
