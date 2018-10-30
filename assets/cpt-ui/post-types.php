<?php
/**
 * Created by PhpStorm.
 * User: breon
 * Date: 12/4/16
 * Time: 8:40 AM
 */
function cptui_register_my_cpts() {

    /**
     * Post Type: Courses.
     */

    $labels = array(
        "name" => __( 'Courses', '' ),
        "singular_name" => __( 'Course', '' ),
    );

    $args = array(
        "label" => __( 'Courses', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "courses", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
        "taxonomies" => array( "post_tag" ),
    );

    register_post_type( "courses", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
