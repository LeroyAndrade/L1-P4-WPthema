<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
<div class="container">
  <div class="row">
      <main class="col-md-9 container p-4">

        <p class="row p-4">De zoekresultaten van <em class="text-primary">
          <?php echo get_search_query();?>  </em>
        </p>

          <div class="row p-4">
            <?php
            if ( have_posts() ) : //if true
                while( have_posts()) : the_post(); ?>

                  <div class="col-md-6">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div><?php the_excerpt();?></div>
                    <div class="text-center p-4">
                      <a href="<?php the_permalink();?>" class="btn btn-outline-primary">Lees meer ...</a>
                    </div>
                  </div>

                <?php
                endwhile; else: ?>
                <p class="p-4">Geen berichten gevonden die lijken op: <em class="text-primary">
                  <?php echo get_search_query();?>  </em></p>
            <?php endif; ?>
          </div>
      </main>

  <aside class="bg-light col-md-3 p-4">


        <?php dynamic_sidebar( 'aside' ); ?>


  </aside>


</div>
</div>
    <?php get_footer(); ?>
