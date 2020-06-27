<!--https://blanken5.home.xs4all.nl/WP_themaMaken.html
https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
opdr 4-->

<?php get_header(); ?>
<div class="container">
  <div class="row">
      <main class="col-md-9">
          <div class="row">
            <?php
              if ( have_posts() ) : //if true
                  while( have_posts()) : the_post(); ?>

                  <!--Metadata-->
                    <div class="col-md-3 p4 text-right small bg-light">
                      <p>Dit bericht is geplaatst door: <?php echo the_author(); ?> </p>
                      <p>op: <?php the_time('j F Y'); ?></p>
                      <p>In volgende categorie: <?php the_category(); ?></p>
                      <p>met als tags

                            <?php
                              $voor= " ";
                              $scheiding = " | ";
                              $na = "";
                              $id= "";
                              $tag_list = get_the_tag_list( $voor, $scheiding, $na, $id );
                              echo $tag_list; ?></p>
                      <hr>
                      <?php $vorig_bericht = get_previous_post();
                          if ( !empty($vorig_bericht)) :?> <p>Vorig bericht</p>
                              <a href="<?php echo the_permalink($vorig_bericht->ID);?>">
                              &#x25C0; <?php echo apply_filters('de_titel', $vorig_bericht->post_title); ?></a>
                      <?php endif; ?>
                      <hr>

                      <?php $volgend_bericht = get_next_post();
                          if ( !empty($volgend_bericht)) :?> <p>Volgend bericht</p>
                              <a href="<?php echo the_permalink($volgend_bericht->ID);?>">
                              &#x25C0; <?php echo apply_filters('de_titel', $volgend_bericht->post_title); ?></a>
                      <?php endif; ?>

                    </div>

                  <!--Inhoud van de post-->
                  <div class="col-md-9">
                      <p><?php the_title();?></p>
                      <p><?php the_content();?></p>
                      <hr>
                      <article class="bg-light p-4">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                         if ( comments_open() || get_comments_number() ) :
                             comments_template();
                         endif;
                        ?>
                      </article>

                  <?php
                  endwhile;
                else: ?>
                  <p>Geen berichten gevonden.</p>
            <?php endif; ?>
          </div>

      </main>

  <aside class="bg-light col-md-3 p-4">
        <?php dynamic_sidebar( 'aside' ); ?>

  </aside>
</div>
</div>
    <?php get_footer(); ?>
