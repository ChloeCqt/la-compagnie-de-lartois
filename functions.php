<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

//On ajoute le style du bundle dans le theme enfant
add_filter('stylesheet_uri', 'gkp_stylesheet_uri', 10, 2);
function gkp_stylesheet_uri($stylesheet_uri, $stylesheet_dir_uri) {
    // On change le nom du fichier
    return $stylesheet_dir_uri.'/dist/bundle.css';
}

//On ajoute nos Scripts
add_action('init', 'gkp_insert_js_in_footer');
function gkp_insert_js_in_footer() {

    // On annule jQuery installer par WordPress (version 1.4.4
    //wp_deregister_script( 'jquery' );

    // On declare un nouveau jQuery si le jQuerry du WordPress est obsolète
    //wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/node_modules/jquery/dist/jquery.min.js','',false,true );

    // On insere le fichier de ses propres fonctions javascript
    wp_register_script('functions', get_stylesheet_directory_uri().'/dist/bundle.js','',false,true);
    wp_enqueue_script('functions');
}
function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( '</a>', '<p class="menu-description">' . $item->description . '</p></a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );
register_nav_menus(
    array(
        'footer' => esc_html__( 'Menu Bas de Page'),
        'social' => esc_html__( 'Réseaux Sociaux')
    )
);

?>