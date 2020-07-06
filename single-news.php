<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package namakemono-community
 */

get_header();
?>

	<main class="single-news__main">
		<div class="single-news__inner">
			<?php if(have_posts()): while(have_posts()):the_post(); ?>
				<header class="single-news__header">
          <h2 class="single-news__title"><?php the_title(); ?></h2>
          <time datetime="<?php the_time('Y-m-d'); ?>" class="single-news__daytime"><?php the_time('Y.m.d'); ?></time>
        </header>
        <div class="single-news__thumbnail">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
          ?>
        </div>
        <div class="single-news__content">
          <?php the_content(); ?>
        </div>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'template-parts/single-follow' ); ?>
    </div>
    <div class="single-news__links">
        <div class="single-news__link -prev <?php if (!get_previous_post()){  echo('-hide');  } ?>">
          <?php if (get_previous_post()):?>
            <?php if ( wp_is_mobile() ) : ?>
              <?php previous_post_link('%link', '<img src="'. get_template_directory_uri().'/assets/img/icons/icon_angle-nocircle.svg" alt="" />前'); ?>
            <?php else: ?>
            <?php previous_post_link('%link', '<img src="'. get_template_directory_uri().'/assets/img/icons/icon_angle-nocircle.svg" alt="" />前の記事'); ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <div class="single-news__link"><a href="<?php echo home_url('/news/') ?>">記事一覧</a></div>
      <div class="single-news__link -next <?php if (!get_next_post()){  echo('-hide');  } ?>">
          <?php if (get_next_post()):?>
            <?php if ( wp_is_mobile() ) : ?>
              <?php next_post_link('%link', '次<img src="'. get_template_directory_uri().'/assets/img/icons/icon_angle-nocircle.svg" alt=""/>'); ?>
            <?php else: ?>
              <?php next_post_link('%link', '次の記事<img src="'. get_template_directory_uri().'/assets/img/icons/icon_angle-nocircle.svg" alt=""/>'); ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
    </div>
<?php
get_sidebar();
get_footer();
