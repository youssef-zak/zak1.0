<?php get_header(); ?>
<main class="section">
  <div class="container card" style="padding:30px;">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="tagline" style="margin:10px 0 20px;">Updated <?php echo get_the_date(); ?></div>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
