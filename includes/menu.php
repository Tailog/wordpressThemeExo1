<?php

class MgMenu{
  /**
   * Fonction qui ajoute un menu au thème.
   *
   * @return void
   */
  
  public static function register_main_menu()
  {
    register_nav_menu('main-menu', 'Menu principal dans le header.');
  }
  /**
   * Fonction qui ajoute des attributes au balise li des nav_menu
   *
   */
  public static function add_additional_class_on_li($classes, $item, $args)
  {
    if ($args->add_li_class) {
      $classes[] = $args->add_li_class;
    }
    return $classes;
  }
  /**
   * Fonction qui ajoute des attributes au balise a des nav_menu
   *
   * @param [type] $att
   * @param [type] $item
   * @param [type] $args
   * @return void
   */
  public static function add_menu_a_class($atts, $item, $args)
  {
    $class = "nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"; // or something based on $item
    $atts['class'] = $class;
    return $atts;
  }

}

add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']);

add_filter('nav_menu_css_class', [MgMenu::class, 'add_additional_class_on_li'], 1, 3);

add_filter('nav_menu_link_attributes', [MgMenu::class, 'add_menu_a_class'], 10, 3);
