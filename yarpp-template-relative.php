<?php if(have_posts()):?>
  <p class="single__footerHeading">関連記事</p>
  <div class="single__related">
    <?php while(have_posts()) : the_post(); ?>
      <article class="single__relatedPost">
        <div class="single__relatedPostInner">
          <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail("small"); ?>
            </a>
          <?php endif; ?>
          <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="single__relatedPostText">
              <span class="single__relatedPostTitle"><?php the_title(); ?></span>
              <time class="single__relatedDaytime"><?php echo get_the_date( 'Y.m.d' ); ?></time>
          </a>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
<?php else: ?>

<?php endif; ?>