<?php
   /*
   Plugin Name: Boot Plus UNC School of Social Work
   Plugin URI: http://breonwilliams.com
   Description: adds shortcodes
   Version: 1.1
   Author: Breon Williams
   Author URI: http://breonwilliams.com
   License: GPL2
   */
$bootplus_shortcodes_path = dirname(__FILE__);
$bootplus_shortcodes_main_file = dirname(__FILE__).'/bootplus.php';
$bootplus_shortcodes_directory = plugin_dir_url($bootplus_shortcodes_main_file);
$bootplus_shortcodes_name = "Boot Plus";

/* Add shortcodes scripts file */
function bootplus_shortcodes_add_scripts() {
  global $bootplus_shortcodes_directory, $bootplus_shortcodes_path;
  if(!is_admin()) {
    
    /* Includes */
    include($bootplus_shortcodes_path.'/assets/functions.php');
      wp_enqueue_style('style-css', $bootplus_shortcodes_directory.'assets/css/style.css');
    wp_register_style( 'lity-css', plugins_url( '/assets/css/lity.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'playbutton', plugins_url( '/assets/css/play-button.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'square-css', plugins_url( '/assets/css/square-section.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'bgvid-css', plugins_url( '/assets/css/background-vid.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'events-css', plugins_url( '/assets/css/recent-events.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'slick-css', plugins_url( '/assets/css/slick.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'slick-theme', plugins_url( '/assets/css/slick-theme.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'masonry-css', plugins_url( '/assets/css/masonry/styles.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'search-css', plugins_url( '/assets/css/search-overlay.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'dataTables-css', plugins_url( '/assets/css/dataTables/datatables.min.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'dataTables-bootstrap', plugins_url( '/assets/css/dataTables/dataTables.bootstrap.min.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'dataTables-buttons', plugins_url( '/assets/css/dataTables/buttons.bootstrap.min.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'dataTables-responsive', plugins_url( '/assets/css/dataTables/responsive.bootstrap.min.css', __FILE__ ), array(), null, 'all' );
    wp_register_style( 'materialize-css', plugins_url( '/assets/css/dataTables/materialize.min.css', __FILE__ ), array(), null, 'all' );
    wp_enqueue_style('slick-nav', $bootplus_shortcodes_directory.'assets/css/slicknav.css');
        }}
add_filter('init', 'bootplus_shortcodes_add_scripts');


function wpb_adding_scripts() {
  global $bootplus_shortcodes_directory, $bootplus_shortcodes_path;
    wp_register_script( 'lity-js', $bootplus_shortcodes_directory.'assets/js/lity.js', 'jquery','1.0',true);
    wp_register_script( 'bgvid', $bootplus_shortcodes_directory.'assets/js/jquery.background-video.js', 'jquery','1.0',true);
    wp_register_script( 'bgvid-js', $bootplus_shortcodes_directory.'assets/js/background-video.js', 'jquery','1.0',true);
    wp_register_script( 'slick-js', $bootplus_shortcodes_directory.'assets/js/slick.js', 'jquery','1.0',true);
    wp_register_script( 'slick-init', $bootplus_shortcodes_directory.'assets/js/slick-init.js', 'jquery','1.0',true);
    wp_register_script( 'parallax', $bootplus_shortcodes_directory.'assets/js/parallax.js', 'jquery','1.0',true);
    wp_register_script( 'modal', $bootplus_shortcodes_directory.'assets/js/modal.js', 'jquery','1.0',true);
    wp_register_script( 'dataTables-init', $bootplus_shortcodes_directory.'assets/js/dataTables/dataTables-init.js', 'jquery','1.0',true);
  wp_register_script( 'dataTables-min', $bootplus_shortcodes_directory.'assets/js/dataTables/jquery.dataTables.min.js', 'jquery','1.0',true);
  wp_register_script( 'buttons-min', $bootplus_shortcodes_directory.'assets/js/dataTables/dataTables.buttons.min.js', 'jquery','1.0',true);
  wp_register_script( 'colVis-js', $bootplus_shortcodes_directory.'assets/js/dataTables/buttons.colVis.min.js', 'jquery','1.0',true);
  wp_register_script( 'html5-js', $bootplus_shortcodes_directory.'assets/js/dataTables/buttons.html5.min.js', 'jquery','1.0',true);
  wp_register_script( 'print-js', $bootplus_shortcodes_directory.'assets/js/dataTables/buttons.print.min.js', 'jquery','1.0',true);
  wp_register_script( 'databootstrap-js', $bootplus_shortcodes_directory.'assets/js/dataTables/dataTables.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'buttonsboot-js', $bootplus_shortcodes_directory.'assets/js/dataTables/buttons.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'jszip-js', $bootplus_shortcodes_directory.'assets/js/dataTables/jszip.min.js', 'jquery','1.0',true);
  wp_register_script( 'pdfmake-js', $bootplus_shortcodes_directory.'assets/js/dataTables/pdfmake.min.js', 'jquery','1.0',true);
  wp_register_script( 'vfs_fonts-js', $bootplus_shortcodes_directory.'assets/js/dataTables/vfs_fonts.js', 'jquery','1.0',true);
  wp_register_script( 'responsive-js', $bootplus_shortcodes_directory.'assets/js/dataTables/dataTables.responsive.min.js', 'jquery','1.0',true);
  wp_register_script( 'responsive-bootstrap', $bootplus_shortcodes_directory.'assets/js/dataTables/responsive.bootstrap.min.js', 'jquery','1.0',true);
  wp_register_script( 'materialize-js', $bootplus_shortcodes_directory.'assets/js/dataTables/materialize.min.js', 'jquery','1.0',true);
  wp_register_script( 'materialize-init', $bootplus_shortcodes_directory.'assets/js/dataTables/materialize-init.js', 'jquery','1.0',true);
  wp_register_script( 'slicknav-js', $bootplus_shortcodes_directory.'assets/js/jquery.slicknav.js', 'jquery','1.0',true);
  wp_register_script( 'slicknav-init', $bootplus_shortcodes_directory.'assets/js/slicknav-init.js', 'jquery','1.0',true);
  wp_register_script( 'search-overlay', $bootplus_shortcodes_directory.'assets/js/search-overlay.js', 'jquery','1.0',true);

  wp_enqueue_script( 'slicknav-js' );
  wp_enqueue_script( 'slicknav-init' );

  wp_register_script( 'masonry-min', $bootplus_shortcodes_directory.'assets/js/masonry/masonry.pkgd.min.js', 'jquery','1.0',true);
  wp_register_script( 'masonry-init', $bootplus_shortcodes_directory.'assets/js/masonry/masonry-init.js', 'jquery','1.0',true);
  wp_register_script( 'imagesLoaded-js', $bootplus_shortcodes_directory.'assets/js/masonry/imagesloaded.pkgd.min.js', 'jquery','1.0',true);


  function init_customizations() {
    if (is_tax('course_category')) {
      wp_enqueue_script( 'dataTables-init' );
      wp_enqueue_script( 'dataTables-min' );
      wp_enqueue_script( 'buttons-min' );
      wp_enqueue_script( 'colVis-js' );
      wp_enqueue_script( 'html5-js' );
      wp_enqueue_script( 'print-js' );
      wp_enqueue_script( 'databootstrap-js' );
      wp_enqueue_script( 'buttonsboot-js' );
      wp_enqueue_script( 'jszip-js' );
      wp_enqueue_script( 'pdfmake-js' );
      wp_enqueue_script( 'vfs_fonts-js' );
      wp_enqueue_script( 'responsive-js' );
      wp_enqueue_script( 'responsive-bootstrap' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'init_customizations', 0 );

}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );




// Limit except length to 125 characters.
// tn limited excerpt length by number of characters
function get_excerpt( $count ) {
  global $post;
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'">Read More</a></p>';
  return $excerpt;
}



   
// Add Formats Dropdown Menu To MCE
if ( ! function_exists( 'wpex_style_select' ) ) {
  function wpex_style_select( $buttons ) {
    array_push( $buttons, 'styleselect' );
    return $buttons;
  }
}
add_filter( 'mce_buttons', 'wpex_style_select' );



// Hooks your functions into the correct filters
function my_add_mce_button() {
  // check user permissions
  if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
    return;
  }
  // check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
    add_filter( 'mce_buttons', 'my_register_mce_button' );
  }
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function my_add_tinymce_plugin( $plugin_array ) {

    $plugin_array['my_mce_button'] = plugins_url( '/assets/js/mce-button.js', __FILE__ );

  return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
  array_push( $buttons, 'my_mce_button' );
  return $buttons;
}

include($bootplus_shortcodes_path.'/assets/custom-meta.php');
include($bootplus_shortcodes_path.'/assets/recent-events.php');
include($bootplus_shortcodes_path.'/assets/recent-posts.php');
include($bootplus_shortcodes_path.'/assets/thumbnails.php');
include($bootplus_shortcodes_path.'/assets/google-map.php');
include($bootplus_shortcodes_path.'/assets/page-categories.php');
include($bootplus_shortcodes_path.'/assets/taxonomy-posts-list.php');
include($bootplus_shortcodes_path.'/assets/menu-shortcode.php');


//include($bootplus_shortcodes_path.'/assets/cpt-ui/post-types.php');
//include($bootplus_shortcodes_path.'/assets/cpt-ui/taxonomies.php');
//include($bootplus_shortcodes_path.'/assets/custom-fields/field-groups.php');

if ( 'option2' == get_theme_mod( 'themeslug_post_content' ) ) :
  include($bootplus_shortcodes_path.'/assets/cpt-ui/post-types.php');
  include($bootplus_shortcodes_path.'/assets/cpt-ui/taxonomies.php');
  include($bootplus_shortcodes_path.'/assets/custom-fields/field-groups.php');
else :

endif;
