<?php get_header(); ?>
<main id="main">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="entry">
      <a class="entry__category" href="
        <?php
          $cats = get_the_category();
          get_category_link($cats[0]->cat_ID);
        ?>">
        <?php
          $cats = get_the_category();
          echo $cats[0]->cat_name;
        ?>
      </a>
      <h1 class="entry__title"><?php the_title(); ?></h1>
      <p class="entry__date"><?php the_date(); ?></p>
      <figure class="entry__thumbnail">
        <?php the_post_thumbnail(''); ?>
      </figure>
      <section class="entry__content">
        <?php the_content(); ?>
      </section>
      
      <!-- 前後の記事 -->
      <div class="previous-next-post">
        <?php if (get_previous_post()):?>
          <p class="previous-next-post__title">
            ≪ 前の記事
          </p>
          <p class="previous-next-post__content">
            <?php previous_post_link('%link', '%title', FALSE); ?>
          </p>
        <?php endif; ?>
        <?php if (get_next_post()):?>
          <p class="previous-next-post__title">
            次の記事 ≫
          </p>
          <p class="previous-next-post__content">
            <?php next_post_link('%link', '%title', FALSE); ?>
          </p>
        <?php endif; ?>
      </div>
    </article>
  <?php endwhile; endif; ?>

</main>
<?php 
  get_sidebar();
  get_footer();
?>
