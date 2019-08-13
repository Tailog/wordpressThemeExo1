<?php
class About
{
  public static function add_personalization_about($wp_customize){
  // Ajout d'un panel avec des options
  // Attention, un panel ne s'affichera que s'il contient des sections
  //https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
  $wp_customize->add_panel('coding-panel-about', [
  'title' => __('Section About'),
  'Description' => __('Personalization of about section')
  ]);
  // Ajout d'une section à un panel définie, si pas de panel défini, alors la section sera visible directement
  // Attention il faut que la panel ait déjà été ajouter pour que la section puisse s'y greffer.
  // Attention une section ne s'affichera que si elle contient des controls.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
  $wp_customize->add_section('coding-about-section-text', [
  'panel' => 'coding-panel-about',
  'title' => __('Personalization of text'),
  'description' => __('Personalization of text')
  ]);
  
  // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting('coding-about-text-left', [
  'type' => 'theme_mod',
  'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
  // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
  // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting('coding-about-text-right', [
  'type' => 'theme_mod',
  'sanitize_callback' => 'sanitize_textarea_field'
  ]);
  // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
  // Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
  // Attention un control ne s'affiche que s'il est lié à un setting.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  $wp_customize->add_control('coding-about-text-left-control', [
  'section' => 'coding-about-section-text',
  'settings' => 'coding-about-text-left',
  'label' => __('Text column left'),
  'description' => __('Personnalisez le texte de la colonne gauche'),
  'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-about-text-right-control', [
  'section' => 'coding-about-section-text',
  'settings' => 'coding-about-text-right',
  'label' => __('Text column right'),
  'description' => __('Personnalisez le texte de la colonne droite'),
  'type' => 'textarea'
  ]);
  }
}

add_action('customize_register', [About::class, 'add_personalization_about']);
