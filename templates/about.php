<?php
$text_column_left = get_theme_mod('coding-about-text-left', __('Text about left'));
$text_column_right = get_theme_mod('coding-about-text-right', __('Text about right'));
?>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <h2 class="text-center text-uppercase text-white">About</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead"><?= $text_column_left ?></p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p class="lead"><?= $text_column_right ?></p>
      </div>
    </div>
    <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
        <i class="fas fa-download mr-2"></i>
        Download Now!
      </a>
    </div>
  </div>
</section>