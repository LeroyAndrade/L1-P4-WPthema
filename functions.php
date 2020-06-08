<?php
  //laad stylesheet

  function laadStijlBlad(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  }

//Hook en of addEventListener zoals in javascript
 //init, de start
add_action('init', 'laadStijlBlad');
?>
