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
?>
  <!--Footer-->
  <?php
    get_footer();
  ?>
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </div>
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <?php 
    get_template_part('templates/portfolio', 'modal');    
  ?>
  <!-- Bootstrap core JavaScript -->
  <script src="http://localhost:8080/wp-content/themes/myTheme/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost:8080/wp-content/themes/myTheme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="http://localhost:8080/wp-content/themes/myTheme/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="http://localhost:8080/wp-content/themes/myTheme/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="http://localhost:8080/wp-content/themes/myTheme/js/jqBootstrapValidation.js"></script>
  <script src="http://localhost:8080/wp-content/themes/myTheme/js/contact_me.js"></script>
  <!-- Custom scripts for this template -->
  <script src="http://localhost:8080/wp-content/themes/myTheme/js/freelancer.min.js"></script>
</body>
</html>