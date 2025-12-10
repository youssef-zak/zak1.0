<?php get_header(); ?>
<main class="section">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('card'); ?> style="padding:20px; margin-bottom:20px;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="tagline"><?php echo zak_trim( get_the_excerpt() ); ?></p>
        <a class="btn" href="<?php the_permalink(); ?>">Read more</a>
      </article>
    <?php endwhile; else: ?>
      <p>No content found.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
