<?php

class MgThemeSetup
{
  /**
   * Ajout la fonctionnalité d'un ajout d'image pour les posts pour ce thème ci
   *
   * @return void
   */
  public static function add_image_article()
  {
    //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci
    add_theme_support('post-thumbnails');
    $test = 0;
  }
  
}
// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', [MgThemeSetup::class, 'add_image_article']);

