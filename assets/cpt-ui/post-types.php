<?php
/**
 * Created by PhpStorm.
 * User: breon
 * Date: 12/4/16
 * Time: 8:40 AM
 */

function cptui_register_my_cpts_staff() {

    /**
     * Post Type: Staff.
     */

    $labels = array(
        "name" => __( "Staff", "" ),
        "singular_name" => __( "Staff", "" ),
    );

    $args = array(
        "label" => __( "Staff", "" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "staff", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "page-attributes" ),
    );

    register_post_type( "staff", $args );
}

add_action( 'init', 'cptui_register_my_cpts_staff' );
