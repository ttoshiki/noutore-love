<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package namakemono-community
 */

get_header();
?>

	<main class="news__main">
		<h2 class="news__heading">
      <span class="sr-only">「脳トレ」スタートブック</span>
      <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/news/news_header.svg"
          alt="NEWS LIST"
      >
		</h2>
		<ul class="news__list">
			<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<li id="post-<?php the_ID(); ?>" <?php post_class('news__item'); ?>>
					<article>
						<a href="<?php the_permalink(); ?>">
							<div class="news__itemContent">
								<?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail(); ?>
								<?php } else { ?>
									<img src="" alt="no image">
								<?php }?>
								<div class="news__itemText">
									<h2 class="news__title"><?php echo get_the_title(); ?></h2>
									<time datetime="<?php the_time('Y-m-d'); ?>" class="news__daytime"><?php the_time('Y/m/d'); ?></time>
									<?php the_excerpt(); ?>
								</div>
							</div>
						</a>
					</article>
				</li>
			<?php endwhile; ?>
			<?php else: ?>>
				<!-- 投稿が無い場合の処理 -->
			<?php endif; ?>
			<div class="news__pagination">
				<?php if ( wp_is_mobile() ) : ?>
					<?php previous_posts_link('PREV') ?>
					<?php next_posts_link('NEXT') ?>
				<?php else: ?>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				<?php endif; ?>
			</div>
		</ul>

<?php
get_sidebar();
get_footer();
