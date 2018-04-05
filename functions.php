<?php
/**
 * theme_wp_setup
 * setup dasar untuk konfigurasi theme
 */
function theme_wp_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    // pengganti tag <title></title>
    add_theme_support('title-tag');

    // mengaktifkan post thumbnail
    add_theme_support('post-thumbnails');

    /* Register Menu */		/*register_nav_menus( array(		'primary' => __( 'Primary Menu', 'Himakon Theme' ),	) ); */
}

add_action('after_setup_theme', 'theme_wp_setup');

/**
 * Menambahkan Scipts Javascript dan CSS
 */
function theme_wp_scripts()
{
    /*
     * Adds JavaScript to pages with the comment form to support
     * sites with threaded comments (when in use).
     */
    if (is_singular() && comments_open() && get_option('thread_comments')) 	{
        wp_enqueue_script('comment-reply');
    }
    wp_enqueue_style(
        'responsive-style',
        get_template_directory_uri() .'css/responsive.css'
    );
    
    wp_enqueue_style(
        'carousel-style',
        get_template_directory_uri() .'css/owl.carousel.min.css'
    );		wp_enqueue_style(        'owl-theme-style',        get_template_directory_uri() .'css/himakom/owl.theme.css'    );		wp_enqueue_style(        'owl-himakom-style',        get_template_directory_uri() .'css/himakom/owl.himakom.css'    );		wp_enqueue_style(        'owl-himakom-style',        get_template_directory_uri() .'css/himakom/himakom.css'    );		wp_enqueue_style(        'fav-style',        get_template_directory_uri() .'img/core-img/himakom.ico'    );		wp_enqueue_style(        'fontawesome-style',        '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'    );	
    // style.css
    wp_enqueue_style('customize-style', get_stylesheet_uri());
    
    /**
     * JAVASCRPIPT
     */
    // jquery di js/jquery
    wp_enqueue_script('jquery-script', get_template_directory_uri() .'js/jquery-2.2.4.min.js', array(), '', true);		wp_enqueue_script('popper-script', get_template_directory_uri() .'js/popper.min.js', array(), '', true);
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() .'js/bootstrap.min.js', array(), '', true);		wp_enqueue_script('plugins-script', get_template_directory_uri() .'js/plugins.js', array(), '', true);		wp_enqueue_script('slick-script', get_template_directory_uri() .'js/slick.min.js', array(), '', true);		wp_enqueue_script('footer-reveal-script', get_template_directory_uri() .'js/footer-reveal.min.js', array(), '', true);		wp_enqueue_script('active-script', get_template_directory_uri() .'js/active.js', array(), '', true);		wp_enqueue_script('owl-carousel-script', get_template_directory_uri() .'js/owl.carousel.min.js', array(), '', true);		wp_enqueue_script('js-script', get_template_directory_uri() .'js/script.js', array(), '', true);		
}
add_action('wp_enqueue_scripts', 'theme_wp_scripts');

/**
 * @param  $more from global variable
 * mengganti tanda '[...]' menjadi '...'
 */
function new_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');
/**
 * Register our sidebars and widgetized areas.
 *
 *//*
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Bawah',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
*/
// custom wp_nav_menu untuk nav-bar bootstrap
//require get_template_directory() . '/wp-bootstrap-navwalker.php';