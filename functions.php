<?php

add_theme_support("menus");

register_sidebar(
	array(
		"before_widget" => "<div class='widget'>",
		"after_widget" => "</div>",
		"before_title" => "<h3>",
		"after_title" => "</h3>"
	)
);

add_theme_support("post-thumbnails");

function winexcerpt($length) {
global $post;
$content = mb_substr(strip_tags($post -> post_content),0,$length);
return $content;
}
define( 'RPT_LOGIN_PAGE', 'rptsuwano-login-page.php' );
add_action( 'login_init', 'rpt_login_init' );
add_filter( 'site_url', 'rpt_login_site_url', 10, 4 );
add_filter( 'wp_redirect', 'rpt_login_wp_redirect', 10, 2 );
if ( ! function_exists( 'rpt_login_init' ) ) {
  function rpt_login_init() {
    if ( !defined( 'RPT_LOGIN' ) || sha1( 'keyword' ) != RPT_LOGIN ) {
      status_header( 403 );
      exit;
    }
  }
}
if ( ! function_exists( 'rpt_login_site_url' ) ) {
  function rpt_login_site_url( $url, $path, $orig_scheme, $blog_id ) {
    if ( ( $path == 'wp-login.php' || preg_match( '/wp-login\.php\?action=\w+/', $path ) ) &&
      ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], RPT_LOGIN_PAGE ) !== false ) )
      $url = str_replace( 'wp-login.php', RPT_LOGIN_PAGE, $url );
    return $url;
  }
}
if ( ! function_exists( 'rpt_login_wp_redirect' ) ) {
  function rpt_login_wp_redirect( $location, $status ) {
    if ( strpos( $_SERVER['REQUEST_URI'], RPT_LOGIN_PAGE ) !== false )
      $location = str_replace( 'wp-login.php', RPT_LOGIN_PAGE, $location );
    return $location;
  }
}



?>