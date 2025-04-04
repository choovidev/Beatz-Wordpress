<?php
/*añadir el estilo del tema*/
function beatz_styles () {
  wp_enqueue_style('beatz-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'beatz_styles');

/* Añadir el botón de volver dentro del formulario de Contact Form 7 antes del botón de envío */
add_filter('wpcf7_form_elements', function($content) {
    $back_button = '<a href="' . home_url() . '" class="back-button">Volver al inicio</a>';
    return $content . $back_button;
});
/*Registrar menu a el tema*/
function beatz_menu(){
  register_nav_menu('menu_principal', 'Menu principal del sitio');
}
add_action('after_setup_theme', 'beatz_menu');


/* Añadir el widget a el tema. */
function beatz_sidebar() {
  register_sidebar( array(
      'name'          => 'Sidebar Primario',
      'id'            => 'sidebar-primario',
  ) );
}
add_action( 'widgets_init', 'beatz_sidebar' );
