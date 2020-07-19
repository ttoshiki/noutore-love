<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package namakemono-community
 */

get_header();
?>

	<main class="seminar-video__main -archive">
    <section class="seminar-video__cat">
      <h3 class="seminar-video__catHeading">
        <div class="seminar-video__catHeadingWrapper">
          <span class="seminar-video__iconCircle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/seminar_icon_movie.svg" alt="MOVIEアイコン" class="seminar-video__catIcon"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/mv_catch_copy.svg" alt="空気感を体感しやすい「動画」でお届け！" class="seminar-video__catCatchCopy -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/mv_catch_copy-sp.svg" alt="空気感を体感しやすい「動画」でお届け！" class="seminar-video__catCatchCopy -sp">
        </div>
      </h3>
      <div class="seminar-video__articleWrapper">
        <ul class="seminar-video__list">
          <?php
            $args = array(
              'post_type' => 'seminar_video',
              'taxonomy' => 'seminar_video_type',
              'term' => 'seminar_video_movie',
              'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args); if ($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" class="seminar-video__item -archive">
              <article class="seminar-video__article">
                <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large', array('class' => 'seminar-video__articleImage -archive'));
          }
                ?>
                <span class="seminar-video__title -archive"><?php echo get_the_title(); ?></span>
                <div class="seminar-video__content -movie"><?php the_content(); ?></div>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
        </ul>
      </div>
    </section>
    <section class="seminar-video__cat">
      <h3 class="seminar-video__catHeading -archive">
        <div class="seminar-video__catHeadingWrapper">
          <span class="seminar-video__iconCircle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/seminar_icon_manual.svg" alt="MANUALアイコン" class="seminar-video__catIcon"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/manual_catch_copy.svg" alt="空気感を体感しやすい「マニュアル」でお届け！" class="seminar-video__catCatchCopy">
        </div>
      </h3>
      <div class="seminar-video__articleWrapper">
        <ul class="seminar-video__list">
          <?php
            $args = array(
              'post_type' => 'seminar_video',
              'taxonomy' => 'seminar_video_type',
              'term' => 'seminar_video_manual',
              'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args); if ($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" class="seminar-video__item -archive">
              <article class="seminar-video__article">
                <?php if (has_post_thumbnail()) {
              the_post_thumbnail('large', array('class' => 'seminar-video__articleImage -archive'));
          }
                ?>
                <span class="seminar-video__title -archive"><?php echo get_the_title(); ?></span>
                <div class="seminar-video__content -manual"><?php the_content(); ?></div>
              </article>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
        </ul>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
