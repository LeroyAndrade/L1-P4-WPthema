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

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"> <img style="width: 100px;" src="<?php echo get_template_directory_uri() . '/splash/logoL.png';?> " alt="Logo ">eroy zijn interesses</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'hoofd-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

        <form role="search" method="get" id="searchform" class="searchform" action="http://30168.hosts2.ma-cloud.nl/wp/leerjaar1/cms/">
				<div>
					<label class="screen-reader-text" for="s">Zoeken naar:</label>
					<input class="form-control mr-sm-2" type="search" placeholder="Zoeken..." aria-label="Zoeken" value="" name="s" id="s"/>
					<input class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchsubmit" value="Zoeken"/>
				</div>
			</form>



        <a href="<?php echo home_url();?>">
          <img style="width: 100px;" src="<?php echo get_template_directory_uri() . '/splash/logoL.png';?> " alt="Logo ">
        </a>
  </div>



</nav>
        <div class="jumbotron" style="background-repeat: no-repeat;background-image: url(<?php echo get_template_directory_uri() . '/splash/download.jpg' ?>);">
          <div class="container">

          <h1 class="display-4 p4"><a href="<?php echo home_url(); ?>"> <?php bloginfo("name"); ?></a></h1>
          <p class="lead"><?php bloginfo('description');?></p>
          </div>
        </div>
      </header>
