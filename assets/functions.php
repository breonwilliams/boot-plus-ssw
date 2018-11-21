<?php


function clean_shortcodes($content) {   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']',
        '<p><span>[' => '[', 
        ']</span></p>' => ']', 
        ']<br />' => ']'
    );

    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'clean_shortcodes');



/* Full Width Color Section */

function color_section( $atts, $content = null ) {

   $atts = shortcode_atts(
        array(
            'bgcolor' => '',
            'class' => '',
            'id' => '',
            'flex' => '',
        ), $atts, 'color_section' );


    $bgcolor = $atts['bgcolor'];
    $class = $atts['class'];
    $id = $atts['id'];
    $flex = $atts['flex'];

   return '<section id="'.$id.'" class="'.$class.' '.$flex.'" style="background-color: '.$bgcolor.';"><div class="container">' . do_shortcode($content) . '</div></section>';

}

add_shortcode('color_section', 'color_section');

/* Full Width Image Section */
function img_section( $atts, $content = null ) {

   $atts = shortcode_atts(
        array(
            'bgimg' => '',
            'overlay' => '',
            'class' => '',
            'id' => '',
            'flex' => '',
        ), $atts, 'img_section' );


    $bgimg = $atts['bgimg'];
    $overlay = $atts['overlay'];
    $class = $atts['class'];
    $id = $atts['id'];
    $flex = $atts['flex'];

   return '

   <section id="'.$id.'" class="bg-img '.$flex.'" style="background-image: url('.$bgimg.');">
        <div class="'.$class.'" style="background:'.$overlay.';">
            <div class="container">
                ' . do_shortcode($content) . '
            </div>
        </div>
    </section>

    ';

}

add_shortcode('img_section', 'img_section');


/* Full Width Parallax Section */
function parallax_section( $atts, $content = null ) {
    wp_enqueue_script( 'parallax' );
    $atts = shortcode_atts(
        array(
            'bgimg' => '',
            'overlay' => '',
            'class' => '',
            'id' => '',
            'flex' => '',
        ), $atts, 'img_section' );


    $bgimg = $atts['bgimg'];
    $overlay = $atts['overlay'];
    $class = $atts['class'];
    $id = $atts['id'];
    $flex = $atts['flex'];

    return '

   <section id="'.$id.'" class="parallax '.$flex.'" style="background-image:url('.$bgimg.');">
        <div class="'.$class.'" style="background:'.$overlay.';">
            <div class="container">
                ' . do_shortcode($content) . '
            </div>
        </div>
    </section>

    ';

}

add_shortcode('parallax_section', 'parallax_section');

/*full width background color end*/

/*square background section*/

function square_section( $atts, $content = null ) {
    wp_enqueue_style( 'square-css' );
    $atts = shortcode_atts(
        array(
            'bgimg' => '',
            'class' => '',
            'style' => '',
            'id' => '',
        ), $atts, 'custom_div' );

    $bgimg = $atts['bgimg'];
    $class = $atts['class'];
    $style = $atts['style'];
    $id = $atts['id'];

    return '<div id="'.$id.'" class="square-container " ><div class="square-position"><div class="square bg-img '.$class.'" style="background-image:url('.$bgimg.'); '.$style.'""><div class="square-inn rounded">' . do_shortcode($content) . '</div></div></div></div>';

}

add_shortcode('square_section', 'square_section');



/* Custom Div */

function custom_div( $atts, $content = null ) {

   $atts = shortcode_atts(
        array(
            'class' => '',
            'style' => '',
            'id' => '',
        ), $atts, 'custom_div' );

    $class = $atts['class'];
    $style = $atts['style'];
    $id = $atts['id'];
   
   return '<div id="'.$id.'" class="'.$class.'" style="'.$style.'"">' . do_shortcode($content) . '</div>';

}

add_shortcode('custom_div', 'custom_div');





/* Background Video */

function background_vid( $atts, $content = null ) {
    wp_enqueue_script( 'bgvid' );  
    wp_enqueue_script( 'bgvid-js' );
    wp_enqueue_style( 'bgvid-css' );

    $atts = shortcode_atts(
        array(
            'poster' => '',
            'mp4' => '',
            'padding' => '',
            'class' => '',
            'id' => '',
            'overlay' => '',
        ), $atts, 'background_vid' );


    $poster = $atts['poster'];
    $mp4 = $atts['mp4'];
    $padding = $atts['padding'];
    $class = $atts['class'];
    $id = $atts['id'];
    $overlay = $atts['overlay'];
    return '

<div id="'.$id.'" class="video-hero jquery-background-video-wrapper demo-video-wrapper '.$class.'">
        <video class="jquery-background-video" autoplay muted loop poster="'.$poster.'">
            <source src="'.$mp4.'" type="video/mp4">
        </video>
        <div class="video-overlay" style="background:'.$overlay.';"></div>
        <div class="'.$padding.'">
            <div class="video-hero--content">
                <div class="container">
                    ' . do_shortcode($content) . '
                </div>
            </div>
        </div>
    </div>'



        ;

}

add_shortcode('background_vid', 'background_vid');

/* Modal */

function boot_modal( $atts, $content = null ) {
    wp_enqueue_script( 'modal' );

    $atts = shortcode_atts(
        array(
            'button' => '',
            'title' => '',
            'class' => '',
            'target' => '',
            'closeclass' => '',
            'modalsize' => '',
        ), $atts, 'boot_modal' );


    $button = $atts['button'];
    $title = $atts['title'];
    $class = $atts['class'];
    $target = $atts['target'];
    $closeclass = $atts['closeclass'];
    $modalsize = $atts['modalsize'];

    return '

        <a href="#" class="'.$class.'" data-toggle="modal" data-target="#'.$target.'">'.$button.'</a>

        <div class="modal fade" id="'.$target.'" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true" style="display: none;">
            <div class="modal-dialog '.$modalsize.'">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="modal-label-3">'.$title.'</h4>
                    </div>
                    <div class="modal-body">
                        ' . do_shortcode($content) . '
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="'.$closeclass.'" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>'

        ;

}

add_shortcode('boot_modal', 'boot_modal');

/* Popup Video */

function popup_video( $atts, $content = null ) {
    wp_enqueue_script( 'lity-js' );
    wp_enqueue_style( 'lity-css' );

    $atts = shortcode_atts(
        array(
            'class' => '',
            'url' => '',
        ), $atts, 'popup_video' );

    $class = $atts['class'];
    $url = $atts['url'];

    return '

        <a href="'.$url.'" class="'.$class.'" data-lity>' . do_shortcode($content) . '</a>
        '

        ;

}

add_shortcode('popup_video', 'popup_video');

/* Popup Video Play Button */

function popup_playbutton( $atts, $content = null ) {
    wp_enqueue_script( 'lity-js' );
    wp_enqueue_style( 'lity-css' );
    wp_enqueue_style( 'playbutton' );

    $atts = shortcode_atts(
        array(
            'class' => '',
            'url' => '',
        ), $atts, 'popup_playbutton' );

    $class = $atts['class'];
    $url = $atts['url'];

    return '

        <a href="'.$url.'" id="play-video" class="video-play-button '.$class.'" data-lity><span></span></a>
        '

        ;

}

add_shortcode('popup_playbutton', 'popup_playbutton');

/*carousel custom start*/
function carousel_wrap( $atts, $content = null ) {
    wp_enqueue_script( 'slick-js' );
    wp_enqueue_script( 'slick-init' );
    wp_enqueue_style( 'slick-css' );
    wp_enqueue_style( 'slick-theme' );
    $atts = shortcode_atts(
        array(
            'class' => '',

        ), $atts, 'carousel_wrap' );


    $class = $atts['class'];

    return '

        <div class="'.$class.'">
            ' . do_shortcode($content) . '
        </div>'

        ;

}

add_shortcode('carousel_wrap', 'carousel_wrap');

function carousel_item( $atts, $content = null ) {

    $atts = shortcode_atts(
        array(
            'class' => '',
        ), $atts, 'carousel_item' );

    $class = $atts['class'];

    return '<div class="'.$class.'" >' . do_shortcode($content) . '</div>';

}

add_shortcode('carousel_item', 'carousel_item');

/*rcarousel custom end*/


/* Search Overlay */

function search_overlay( $form ) {
    wp_enqueue_style( 'search-css' );
    wp_enqueue_script( 'search-overlay' );
    $form = '

    <a class="mk-search-trigger mk-fullscreen-trigger" href="#" id="search-button-listener">
    <div id="search-button"><i class="fa fa-search"></i></div>
  </a>
  <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
    <div id="mk-fullscreen-search-wrapper">
      <form role="search" method="get" id="mk-fullscreen-searchform" action="' . home_url( '/' ) . '" >
        <input type="text" value="' . get_search_query() . '" name="s" placeholder="Search..." id="mk-fullscreen-search-input">
        <i class="fa fa-search fullscreen-search-icon"><input value="'. esc_attr__('') .'" type="submit"></i>
      </form>
    </div>
  </div>


    ';

    return $form;
}

add_shortcode('search_overlay', 'search_overlay');


/* Logged In */
function check_user_li ($params, $content = null){
    //check tha the user is logged in
    if ( is_user_logged_in() ){

        //user is logged in so show the content
        return '' . do_shortcode($content) . '' ;

    }

    else{

        //user is not logged in so hide the content
        return '' ;

    }

}

//add a shortcode which calls the above function
add_shortcode('boot_logged_in', 'check_user_li' );

/* Logged Out */
function check_user_lo ($params, $content = null){
    //check tha the user is logged in
    if ( is_user_logged_in() ){

        //user is logged in so show the content
        return '' ;

    }

    else{

        //user is not logged in so hide the content
        return '' . do_shortcode($content) . '' ;

    }

}

//add a shortcode which calls the above function
add_shortcode('boot_logged_out', 'check_user_lo' );


function wpfa_login_form( $args ) {

    $defaults = shortcode_atts( array(
        'echo'              => false,
        'redirect'          => site_url( '/wp-admin/' ),
        'form_id'           => 'loginform',
        'label_username'    => __( 'Username', 'wpfa-textdomain' ),
        'label_password'    => __( 'Password', 'wpfa-textdomain' ),
        'label_remember'    => __( 'Remember Me', 'wpfa-textdomain' ),
        'label_log_in'      => __( 'Log In', 'wpfa-textdomain' ),
        'id_username'       => 'user_login',
        'id_password'       => 'user_pass',
        'id_remember'       => 'rememberme',
        'id_submit'         => 'wp-submit',
        'remember'          => true,
        'value_username'    => NULL,
        'value_remember'    => false
    ), $args, 'wpfa_login' );

    $login_args = wp_parse_args( $args, $defaults );

    return wp_login_form( $login_args );

} /** End function - WPFA login form */
add_shortcode( 'boot_login_form', 'wpfa_login_form' );


//Logout Shortcode
function logout_func ($atts, $content = null) {
    extract(shortcode_atts(array(
        'linktext' => 'Log Out',
        'class' => '',
    ), $atts));
    $class = $atts['class'];
    $logoutlink = wp_logout_url( home_url() );
    return '<a class="'.$class.'" href="' . $logoutlink . '" title="Logout">'. $linktext .'</a>';
}
add_shortcode( 'boot_logoutbtn', 'logout_func' );

function alphaindex_queries( $query ) {
    /* Sort songs alpha  */
    if ( ! is_admin() && ( is_post_type_archive( 'courses' ) || is_tax( 'course_category' ) ) && $query->is_main_query() ) {
        $query->set('orderby', 'name');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', '-1');
    }
}
add_action( 'pre_get_posts', 'alphaindex_queries' );