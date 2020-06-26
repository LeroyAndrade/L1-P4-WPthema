<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
<div class="container">
  <div class="row">
      <main class="col-md-8">

          <?php
            if ( have_posts() ) : //if true
                while( have_posts()) : the_post(); ?>
                    <p><?php the_title();?></p>
                    <p><?php the_content();?></p>

                <?php
                endwhile;
              else: ?>
                <p>Geen berichten gevonden.</p>
          <?php endif; ?>
      </main>

  <aside class="bg-light col-md-4 p-4">
      <div id="sidebar-primary" class="sidebar">
        <?php dynamic_sidebar( 'aside' ); ?>
      </div>

  </aside>
</div>
</div>
    <?php get_footer(); ?>
