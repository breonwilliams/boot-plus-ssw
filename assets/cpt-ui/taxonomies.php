<?php
/**
 * Created by PhpStorm.
 * User: breon
 * Date: 12/4/16
 * Time: 8:40 AM
 */


function cptui_register_my_taxes() {

    /**
     * Taxonomy: Staff Categories.
     */

    $labels = array(
        "name" => __( "Staff Categories", "" ),
        "singular_name" => __( "Staff Category", "" ),
    );

    $args = array(
        "label" => __( "Staff Categories", "" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'staff_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "staff_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "staff_category", array( "staff" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
