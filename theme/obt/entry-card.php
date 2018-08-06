<!-- 記事一覧のカード -->
<a href="<?php the_permalink(); ?>" class="entry-card">
  <figure class="entry-card__thumbnail">
    <?php the_post_thumbnail(''); ?>
  </figure>
  <p class="entry-card__category">
    <?php
      $cats = get_the_category();
      echo $cats[0]->cat_name;
    ?>
  </p>
  <section class="entry-card__text">
    <h2 class="entry-card__text__title"><?php the_title(); ?></h2>
    <p class="entry-card__text__postdate"><?php the_time('Y年n月j日'); ?></p>
  </section>
</a>
