<?php get_header(); ?>
<main id="main-page">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="page">
      <section class="page__content">
        <?php the_content(); ?>
      </section>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php 
  get_footer();
?>
