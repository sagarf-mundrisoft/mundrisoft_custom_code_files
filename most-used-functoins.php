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


/* Remove the admin bar from the front end */
add_filter( 'show_admin_bar', '__return_false' );

/* Remove the admin bar from the front end */
function remove_screen_options(){      
return false;  
}  
add_filter('screen_options_show_screen', 'remove_screen_options');

/* Redirect commenter to thank you post or page */
add_filter('comment_post_redirect', 'redirect_after_comment');  
function redirect_after_comment(){       
wp_redirect('/thank-you-page/');        
exit();  
}
