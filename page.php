<?php
get_header();
?>

<div class="page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <?php while (have_posts()) : the_post(); ?>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php endwhile; ?>
</div>
<div class="container single-post-container">
  <div class="post-content">
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
  <?php wp_reset_query(); ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <?php get_template_part('templates/partials/grid-portfolio'); ?>

  <?php
  get_footer();
  ?>