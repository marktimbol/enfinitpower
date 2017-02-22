<?php
/*	
*	---------------------------------------------------------------------
*	Collars Theme Setup
*	--------------------------------------------------------------------- 
*/

if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

/* Register menu */
register_nav_menus( array(
	'primary' => __( 'Main Navigation', 'tilt' )
) );

/* Menu fallback */
function collars_no_menu(){
	$url = admin_url( 'nav-menus.php');
	echo '<div class="menu-container"><ul class="menu"><li><a href="'. esc_url($url) .'">Click here to assign menu!</a></li></ul></div>';
}   

/* Thumbnails */
add_theme_support( 'post-thumbnails' );

/* Post formats */
add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );

/* Feeds */
add_theme_support( 'automatic-feed-links' );

/* HTML5 */
add_theme_support( 'html5', array( 'gallery', 'caption' ) );

/* Use shortcodes in text widgets */
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter('widget_text', 'do_shortcode');

/* Redirect to "Theme Options/Import Data" after activation */
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
	wp_redirect( admin_url( 'themes.php?page=ot-theme-options#section_import_data' ) );
}

/* Extend editor */
function collars_more_buttons($buttons) {
  $buttons[] = 'fontsizeselect';
 
  return $buttons;
}

/* Languages */
//function collars_language_setup(){
//    load_theme_textdomain( 'tilt', get_template_directory() . '/languages' );
//}
//add_action('after_setup_theme', 'collars_language_setup');

/* Editor style */
add_editor_style('/css/editor-style.css');

?>