<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', '_s' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

function addScripts() {
	wp_register_script('jQuery', get_stylesheet_directory_uri() . '/js/jquery-3.1.1.min.js');
	wp_enqueue_script('jQuery');
	wp_register_script('materialize', get_stylesheet_directory_uri() . '/js/materialize.js');
	wp_enqueue_script('materialize');
}
add_action('wp_enqueue_scripts', 'addScripts');

function addStylesheet() {
	wp_register_style('style', get_template_directory_uri() . 'style.css');
	wp_enqueue_style('style');
	wp_register_style('materialize', get_template_directory_uri() . '/css/materialize.css');
	wp_enqueue_style('materialize');
}
add_action('wp_enqueue_scripts', 'addStylesheet');

add_action('wp_head','my_ajaxurl');
function my_ajaxurl() {
	$html = '<script type="text/javascript">';
	$html .= 'var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '"';
	$html .= '</script>';
	echo $html;
}

add_action('wp_ajax_update_user', 'update_user_ajax');
function update_user_ajax(){
	$id_number = $_POST['id_number'];
	$bscp = $_POST['bscp'];
	$fp = $_POST['fp'];
	$ap = $_POST['ap'];
	$tdw = $_POST['tdw'];
	$core = $_POST['core'];
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$nickname = $_POST['nickname'];
	$course = $_POST['course'];
	$ga = $_POST['ga'];
	$user = get_user_by('login', $id_number);
	if ($user == false){
		$userdata = array(
		    'user_login'  =>  $id_number,
		    'user_email'    =>  $email,
		    'user_pass'   =>  $id_number,  // When creating an user, `user_pass` is expected.
			'first_name' => $first_name,
			'last_name' => $last_name,
			'course' => $course,
			'id_number' => $id_number,
			'core' => $core,
			'ga' => $ga,
			'bscp' => $bscp,
			'fp' => $fp,
			'ap' => $ap,
			'tdw' => $tdw,
			'email' => $email
		);
		wp_insert_user( $userdata );


	} else {
		if (get_user_meta($user->ID, 'bscp', true) == ''){
			add_user_meta($user->ID, 'bscp', $bscp, true);
		} else {
			update_user_meta($user->ID, 'bscp', $bscp);
		}
		if (get_user_meta($user->ID, 'fp', true) == ''){
			add_user_meta($user->ID, 'fp', $fp, true);
		} else {
			update_user_meta($user->ID, 'fp', $fp);
		}
		if (get_user_meta($user->ID, 'ap', true) == ''){
			add_user_meta($user->ID, 'ap', $ap, true);
		} else {
			update_user_meta($user->ID, 'ap', $ap);
		}
		if (get_user_meta($user->ID, 'tdw', true) == ''){
			add_user_meta($user->ID, 'tdw', $tdw, true);
		} else {
			update_user_meta($user->ID, 'tdw', $tdw);
		}
		if (get_user_meta($user->ID, 'core', true) == ''){
			add_user_meta($user->ID, 'core', $core, true);
		} else {
			update_user_meta($user->ID, 'core', $core);
		}
		if (get_user_meta($user->ID, 'nickname', true) == ''){
			add_user_meta($user->ID, 'nickname', $nickname, true);
		}
		else {
			update_user_meta($user->ID, 'nickname', $nickname);
		}
		if (get_user_meta($user->ID, 'first_name', true) == ''){
			add_user_meta($user->ID, 'first_name', $first_name, true);
		} 
		else {
			update_user_meta($user->ID, 'first_name', $first_name);
		}
		if (get_user_meta($user->ID, 'last_name', true) == ''){
			add_user_meta($user->ID, 'last_name', $last_name, true);
		} 
		else {
			update_user_meta($user->ID, 'last_name', $last_name	);
		}
		if (get_user_meta($user->ID, 'course', true) == ''){
			add_user_meta($user->ID, 'course', $course, true);
		} 
		else {
			update_user_meta($user->ID, 'course', $course);
		}
		if (get_user_meta($user->ID, 'ga', true) == ''){
			add_user_meta($user->ID, 'ga', $ga, true);
		} 
		else {
			update_user_meta($user->ID, 'ga', $ga);
		}
	}
	die();
}

function bs_hide_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'bs_hide_admin_bar');

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Ateneo BOx';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function admin_login_redirect( $redirect_to, $request, $user )
{
global $user;
if( isset( $user->roles ) && is_array( $user->roles ) ) {
if( in_array( "administrator", $user->roles ) ) {
return $redirect_to;
} else {
return home_url();
}
}
else
{
return $redirect_to;
}
}
add_filter("login_redirect", "admin_login_redirect", 10, 3);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
