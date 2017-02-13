<?php
//Plantilla para hacer los menús desplegables.
require_once('wp_bootstrap_navwalker.php');

/**
 * Crear un menú desplegable del que solo puede
 * colgar un nivel de submenús.
 */

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Crear una zona de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'before_widget' => '<div class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3>',
       'after_title'   => '</h3>',
   )
 );
}
add_action('init','mis_widgets');

/**
 * Filtrar resultados de búsqueda para que solo muestre
 * posts en el listado.
 */

function buscar_solo_posts($query) {
 if($query->is_search) {
   $query->set('post_type','post');
 }
 return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');
