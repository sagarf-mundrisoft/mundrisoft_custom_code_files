/* To enable */
function remove_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'remove_theme_support' );

/*To Show Current year in content  use [current-year] shortcode */
function show_current_year( $atts ){
  return date('Y');
}
add_shortcode( 'current-year', 'show_current_year' );
