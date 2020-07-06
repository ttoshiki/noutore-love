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

	<main class="seminar-video__main">
    <h2 class="seminar-video__heading">
      <span class="sr-only">自宅でこっそり脳内を変える動画＆マニュアルのご案内</span>
      <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/guidance_header.svg"
          alt="自宅でこっそり脳内を変える動画＆マニュアルのご案内"
          class="-pc"
      >
      <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/guidance_header-sp.svg"
          alt="自宅でこっそり脳内を変える動画＆マニュアルのご案内"
          class="-sp"
      >
    </h2>
    <section class="seminar-video__cat">
      <h3 class="seminar-video__catHeading">
        <span class="seminar-video__iconCircle -sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/seminar_icon_movie.svg" alt="" class="seminar-video__catIcon"></span>
        <div class="seminar-video__catHeadingWrapper">
          <span class="seminar-video__iconCircle -pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/seminar_icon_movie.svg" alt="" class="seminar-video__catIcon"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/mv_catch_copy.svg" alt="空気感を体感しやすい「動画」でお届け！" class="seminar-video__catCatchCopy -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/mv_catch_copy-sp.svg" alt="空気感を体感しやすい「動画」でお届け！" class="seminar-video__catCatchCopy -sp">
        </div>
      </h3>
      <div class="seminar-video__articleWrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/mv_type_partnership.svg" alt="パートナーシップ系" class="seminar-video__category">
        <ul class="seminar-video__list">
          <?php
            $args = array(
              'post_type' => 'seminar_video',
              'taxonomy' => 'seminar_video_type',
              'term' => 'seminar_video_movie',
              'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" class="seminar-video__item">
              <article class="seminar-video__article">
                <a href="<?php echo home_url('/seminar_video_detail') ?>#post-<?php the_ID(); ?>">
                  <?php if ( has_post_thumbnail()) {
                    the_post_thumbnail('large', array('class' => 'seminar-video__articleImage'));
                  }
                  ?>
                  <span class="seminar-video__title"><?php echo get_the_title(); ?></span>
                </a>
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
      <h3 class="seminar-video__catHeading">
        <div class="seminar-video__catHeadingWrapper">
          <span class="seminar-video__iconCircle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/seminar_icon_manual.svg" alt="" class="seminar-video__catIcon"></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/manual_catch_copy.svg" alt="空気感を体感しやすい「マニュアル」でお届け！" class="seminar-video__catCatchCopy -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/manual_catch_copy-sp.svg" alt="空気感を体感しやすい「マニュアル」でお届け！" class="seminar-video__catCatchCopy -sp">
        </div>
      </h3>
      <div class="seminar-video__articleWrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seminar-video/manual_type_partnership.svg" alt="パートナーシップ系" class="seminar-video__category">
        <ul class="seminar-video__list">
          <?php
            $args = array(
              'post_type' => 'seminar_video',
              'taxonomy' => 'seminar_video_type',
              'term' => 'seminar_video_manual',
              'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" class="seminar-video__item">
              <article class="seminar-video__article">
                <a href="<?php echo home_url('/seminar_video_detail') ?>#post-<?php the_ID(); ?>">
                  <?php if ( has_post_thumbnail()) {
                    the_post_thumbnail('large', array('class' => 'seminar-video__articleImage'));
                  }
                  ?>
                  <span class="seminar-video__title"><?php echo get_the_title(); ?></span>
                </a>
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
