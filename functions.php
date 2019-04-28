<?php

add_theme_support( 'post-thumbnails' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'wordify' ),
) );

?>