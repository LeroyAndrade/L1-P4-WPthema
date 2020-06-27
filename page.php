<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
<div class="container">
  <div class="row">
      <main class="col-md-8 container">

          <div class="row">
            <?php
            if ( have_posts() ) : //if true
                while( have_posts()) : the_post(); ?>

                  <div class="col-md-6">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div><?php the_excerpt();?></div>
                    <div class="text-center">
                      <a href="<?php the_permalink();?>" class="btn btn-outline-primary">Lees meer ...</a>
                    </div>
                  </div>

                <?php
                endwhile; else: ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>
          </div>
      </main>

  <aside class="bg-light col-md-4">


        <?php dynamic_sidebar( 'aside' ); ?>


  </aside>
</div>
</div>
    <?php get_footer(); ?>
