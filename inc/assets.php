<?php

add_action( 'wp_enqueue_scripts', 'load_enqueue_script', 1 );

function load_enqueue_script() {


    wp_register_script( 'mdb.min.js', get_template_directory_uri() . '/assets/js/mdb.min.js', '', '', true );
    wp_enqueue_script( 'mdb.min.js' );
}
 
add_action( 'wp_enqueue_scripts', 'load_all_stylesheets' );

function load_all_stylesheets() {

    wp_enqueue_style( 'mdb.min.css', get_template_directory_uri() . '/assets/css/mdb.min.css' );
    wp_enqueue_style( 'font-awesome.css', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css' );
    wp_enqueue_style( 'custom.css', get_template_directory_uri() . '/style.css' );
}

// Setup theme
function mdbtheme_setup(){
    // add feature image support
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'menus' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'mdbtheme' ),
        'footer'  => __( 'Secondary menu', 'mdbtheme' ),
        ) 
    );
    
}
	
add_action( 'after_setup_theme', 'mdbtheme_setup');

// Register sidebars
function my_sidebars(){

    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'mdbtheme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your footer.', 'mdbtheme' ),
            'before_widget' => '<section id="%1$s" class="widget text-center border-bottom pb-4 mb-4 %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    }
    add_action( 'widgets_init', 'my_sidebars' );

    /**
 * Register Custom Navigation Walker
 */
if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

 