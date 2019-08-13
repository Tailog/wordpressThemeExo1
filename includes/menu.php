<?php

/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */

function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu');

/**
 * Fonction qui ajoute des attributes au balise li des nav_menu
 *
 */
function add_additional_class_on_li($classes, $item, $args)
{
  if ($args->add_li_class) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Fonction qui ajoute des attributes au balise a des nav_menu
 *
 * @param [type] $att
 * @param [type] $item
 * @param [type] $args
 * @return void
 */
function add_menu_a_class($atts, $item, $args)
{
  $class = "nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
// Ajout d'un écouteur d'événement de type filtre qui nous permet de changer les attributs des balises <a>
// les add_action et add_filter peuvent avoit jusqu'à 4 paramêtre. Le 3ème pour l'ordre d'execution et le 4 ème pour le nombre de parammètre qui seront passer à la fonction callback
add_filter('nav_menu_link_attributes', 'add_menu_a_class', 10, 3);

?>