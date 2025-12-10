<?php get_header(); ?>
<main class="section">
  <div class="container card" style="padding:30px;">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="tagline">By <?php the_author(); ?> · <?php echo get_the_date(); ?></div>
      <div class="entry-content" style="margin-top:20px;">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
