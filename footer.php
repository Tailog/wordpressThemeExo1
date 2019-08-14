<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-5 mb-lg-0">
        <?php dynamic_sidebar('footer-left'); ?>
      </div>
      <div class="col-md-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <?php
        $args = [
          'menu_class' => 'list-inline mb-0',
          'theme_location' => 'social-network-footer',
          'container' => '',
          'fallback_cb' => false,
          'add_li_class' => 'list-inline-item'
        ];
        wp_nav_menu($args);
        ?>
      </div>
      <div class="col-md-4">
        <?php dynamic_sidebar('footer-right') ?>
      </div>
    </div>
  </div>
</footer>

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
// Ajout de la fonction wp_footer() qui va placer les scripts js qui doivent se trouver avant la fermeture de la balise body
// https://developer.wordpress.org/reference/functions/wp_footer/
wp_footer();
?>
</body>

</html>