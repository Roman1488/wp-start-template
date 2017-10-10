<?php
function theme_scripts()
{
    // Register and including styles
    wp_enqueue_style('main_style', get_template_directory_uri().'/css/style.min.css', array(), false, '');

    // Register and including scripts
    //wp_deregister_script( 'jquery' );
    //wp_register_script( 'jquery', get_theme_file_uri( 'libs/jquery/dist/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main_scripts', get_template_directory_uri().'/js/scripts.min.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



function my_theme_setup() {
	/*
	 * Make theme available for translation.
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'my_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'my_theme' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'my_theme-featured-image', 2000, 1200, true );


	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'my_theme' ),
		'social' => __( 'Social Links Menu', 'my_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );


}
add_action( 'after_setup_theme', 'my_theme_setup' );


function starter_customize_register( $wp_customize ) 
{
    $wp_customize->add_section( 'header_section' , array(
        'title'    => __( 'Header', 'starter' ),
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'header_color' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'    => __( 'Header Color', 'starter' ),
        'section'  => 'header_section',
        'settings' => 'header_color',
    ) ) );
}
add_action( 'customize_register', 'starter_customize_register');
?>