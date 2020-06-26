<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
<div class="container">
  <div class="row">
      <main class="col-md-9 container">
        <div class="row">
          <?php
          if ( have_posts() ) : //if true
              while( have_posts()) : the_post(); ?>

                <article class="col-md-6">
                  <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                  <p><?php the_excerpt();?></p>
                  <div class="text-center p-4">
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary">Lees meer ...</a>
                  </div>
                </article>
              <?php
              endwhile; else: ?>
              <p>Geen berichten gevonden.</p>
          <?php endif; ?>

        </div>

      </main>

  <aside class="bg-light col-md-3">
    <h3>
      <div id="sidebar-primary" class="sidebar">
        <?php dynamic_sidebar( 'aside' ); ?>
      </div>


    </h3>
  </aside>
</div>
</div>
    <?php get_footer(); ?>
