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
    <header>
        <nav>
           <?php wp_nav_menu(
             array(
               'theme_location' => 'hoofdmenu'
             ) ) ;?>
        </nav>

        <div class="jumbotron">
        </div>
          <h1 class="display-4"><a href="<?php echo home_url(); ?>"> <?php bloginfo("name"); ?></a></h1>
          <p class="lead"><?php bloginfo('description');?></p>
        </div>
      </header>
