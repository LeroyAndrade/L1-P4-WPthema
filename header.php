<!DOCTYPE html>
<html <?php language_attributes();?> dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="author" content="Leroy Andrade">
    <meta name="description" content="Wordpress, website,word press">
    <meta name="keywords" content="Wordpress, website,word press">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title><?php bloginfo("name"); ?></title>
      <?php wp_head(); ?>

<!-- dit zorgt voor meer ruimte zodat de admin bar goed wordt getoond midders wp_footer-->
<!--
https://developer.wordpress.org/themes/basics/including-css-javascript/
-->
  </head>


  <body>
    <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo("name") ?></a></h1>
