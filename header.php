<!DOCTYPE html>
<html <?php language_attributes();?> dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="Leroy Andrade" content="<?php bloginfo('author'); ?>">
    <title><?php bloginfo("name"); ?></title>
      <?php wp_head(); ?> <!-- dit zorgt voor meer ruimte zodat de admin bar goed wordt getoond midders wp_footer-->
<!--
https://developer.wordpress.org/themes/basics/including-css-javascript/
-->
  </head>


  <body>
    <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo("name") ?></a></h1>
