<?php
  //laad stylesheet

  function laadStijlBlad(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_stylesheet_uri());

  }

//Hook en of addEventListener zoals in javascript
 //init, de start
add_action('init', 'laadStijlBlad');




//Registreer menu

function registreer_menu(){
  $argumenten = array(
    'hoofdmenu' => __('Hoofd menu')
  );
  register_nav_menus();

}
add_action('init', 'registreer_menu');








?>
