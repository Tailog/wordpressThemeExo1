<?php 
  //https://developer.wordpress.org/themes/basics/template-files/#using-template-files
  // on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit.
  //Header
  get_header();
  //Banner
  get_template_part('templates/banner');
  //Portfolio
  get_template_part('templates/portfolio');
  //About
  get_template_part('templates/about');
  //Contact
  get_template_part('templates/contact');
  //Footer
  get_footer();
  //Modals
  get_template_part('templates/portfolio', 'modal');   
?>
</body>
</html>