<?php


/* SCRIPTS & STYLES */
function wpdev20_scripts() {
  /* STYLES */
  wp_enqueue_style("main-styles", get_stylesheet_uri(), NULL, microtime());

  /* SCRIPTS */
  wp_enqueue_script( "main-js", get_theme_file_uri("bundled.js"), NULL, microtime(), true);
}
add_action("wp_enqueue_scripts", "wpdev20_scripts");




?>
