<?php
  //laad stylesheet

  function laadStijlBladenScripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.css");
                                                                                                                    //tonen in footer
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap-min.js', array ( 'jquery' ), 1.1, true);



  }

//Hook en of addEventListener zoals in javascript
 //init, de start
add_action('init', 'laadStijlBladenScripts');




//Registreer menu

function registreer_menu(){
  $argumenten = array('hoofd-menu' => __('Hoofd menu Bootstrap')
  );
  register_nav_menus($argumenten);
}
add_action('init', 'registreer_menu');


/**
 * Register Custom Navigation Walker
**/
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'init', 'register_navwalker' );

//widgets gebieden: registreren

function registreer_widgets() {
  register_sidebar(
    array(
      'id' => 'aside',
      'name' => __('widget aside'),
      'description' => __('widget voor het aside-element'),
      'before_widget' => '<div class="widget-aside">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
       'after_title'   => '</h3>'
    )
  );


  register_sidebar(
    array(
      'id' => 'onder',
      'name' => __('widget footer'),
      'description' => __('widget voor het footer-element'),
      'before_widget' => '<div class="widget-footer">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-footer-titel">',
       'after_title'   => '</h3>'
    )
  );
}
 add_action( 'init', 'register_my_menus' );
 add_action( 'init', 'registreer_widgets' );


?>
