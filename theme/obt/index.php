<?php get_header(); ?>
<main id="main">
  <article>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
       <?php get_template_part('entry-card'); ?>
    <?php endwhile; else: ?>
      投稿が見つかりません。
    <?php endif; ?>
  </article>
  <?php get_template_part('pager'); ?>
</main>
<?php
  get_sidebar();
  get_footer();
?>