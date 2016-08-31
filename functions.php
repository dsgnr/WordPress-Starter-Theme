<?php


/*********************
THEME SUPPORT
*********************/
function theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links');
	add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form'
	) );
}



/************************************
  Oembed size option
*************************************/
if ( ! isset( $content_width ) ) {
	$content_width = 680;
}


/************************************
 Menu
*************************************/
register_nav_menus(array(
	'main-nav' => __( 'The Main Menu', 'wordpress-starter-theme' ),
));




/************************************
 Sidebar
*************************************/
function theme_sidebars() {
	register_sidebar(array(
		'id' => 'main-sidebar',
		'name' => __( 'Main sidebar', 'wordpress-starter-theme' ),
		'description' => __( 'The main sidebar', 'wordpress-starter-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
        'before_title' => '<div class="widgettitle">',
        'after_title' => '</div>'
	));
}
add_action( 'widgets_init', 'theme_sidebars' );



/************************************
 Apply theme's stylesheet to the visual editor.
*************************************/
function theme_add_editor_styles() {
    add_editor_style( get_stylesheet_uri() );
}
add_action( 'init', 'theme_add_editor_styles' );



/************************************
 Theme filters
*************************************/
function theme_filters(){
    add_filter( 'the_content', 'remove_ptags_on_images' );
    add_filter( 'excerpt_more', 'custom_excerpt_more' );
}
if ( ! is_admin() ) {
/*function to add async to all scripts*/
function js_async_attr($tag){

# Do not add async to these scripts
$scripts_to_exclude = array('jquery.js');

foreach($scripts_to_exclude as $exclude_script){
	if(true == strpos($tag, $exclude_script ) )
	return $tag;
}

# Add async to all remaining scripts
return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'js_async_attr', 10 );
}
/************************************
 Assets
*************************************/

function load_styles() {
wp_enqueue_style( 'wordpress-starter-theme-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'load_styles');



function load_scripts() {

    wp_enqueue_script( 'jquery' );
		wp_register_script( 'global-js', get_stylesheet_directory_uri() . '/inc/js/global.js', '1.0.0', array('jquery'), true);
		wp_enqueue_script( 'global-js');

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'load_scripts', 20, 1);







register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'wordpress-starter-theme' ),
		'id'            => 'footer-widget-1',
		'before_widget' => '',
		'after_widget' => ''
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'wordpress-starter-theme' ),
		'id'            => 'footer-widget-2',
		'before_widget' => '',
		'after_widget' => ''
	) );



remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
