<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
    <?php
    if ( have_posts() ) : //if true
        while( have_posts()) :
          the_post(); ?>
          <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
          <p><?php the_excerpt();?></p>

        <?php
        endwhile;

    else: ?>
        <p>Geen berichten gevonden.</p>
    <?php endif; ?>
    <?php get_footer(); ?>
  
