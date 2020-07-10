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

	<main class="archive__main">
		<?php if ( !is_tax('column_category') && !is_tax('keyword') ) { ?>
			<?php
				$args = array(
					'post_type' => 'column',
					'meta_key' => 'post_views_count',
      		'orderby' => 'meta_value_num',
					'posts_per_page' => 5
				);
				$the_query = new WP_Query($args); if($the_query->have_posts()):
			?>
			<div id="column-slider">
				<hooper :wheel-control="false" :auto-play="true" :play-speed="3000">
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
						<slide>
							<div>
								<a href="<?php the_permalink(); ?>">
									<div class="archive__postThumbnail">
										<?php if (has_post_thumbnail()) { ?>
											<?php the_post_thumbnail(); ?>
										<?php } else { ?>
											<img src="" alt="no image">
										<?php }?>
										<?php $terms = get_the_terms('', 'column_category'); ?>
										<?php if ($terms) { ?>
											<?php foreach ($terms as $term) { ?>
												<span class="archive__category category-<?php echo$term->slug; ?>"><?php echo $term->name; ?></span>
											<?php } ?>
										<?php } ?>
									</div>
									<h2 class="archive__title">
										<div class="archive__titleDivision">
											<span class="archive__titleSpan">
												<?php
													if (mb_strlen($post->post_title) > 33) {
														$title= mb_substr($post->post_title, 0, 33) ;
															echo $title . '<span class="archive__ellipsis">...</span>';
														} else {
															echo $post->post_title;
														}
													?>
											</span>
										</div>
									</h2>
								</a>
							</div>
						</slide>
					<?php endwhile; ?>
					<?php else: ?>
						<p>準備中です</p>
					<?php endif; ?>
					<hooper-pagination slot="hooper-addons"></hooper-pagination>
				</hooper>
			</div>
			<section class="archive__column">
				<h2 class="archive__columnHeading">
					<span class="sr-only">COLUMN</span>
					<img
					src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/column_header.svg"
					alt="COLUMN"
					class=""
					>
				</h2>
				<span class="archive__subHeading">「脳トレ」コラム</span>
				<!-- <ul class="archive__columnCategoryList">
					<li class="cat-item"><a href="<?php echo home_url('/column/') ?>">最新記事</a></li>
					<?php
						$terms = get_terms('column_category');
						foreach ( $terms as $term ) {
							echo '<li class="cat-item cat-' . $term->slug . '"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}
						?>
				</ul> -->
			</section>
		<?php } elseif(is_tax('column_category')) { ?>
			<div class="archive__taxTitleWrapper"><h2 class="archive__taxTitle">CATEGORY</h2></div>
			<h3 class="archive__titleCategory">"<?php single_term_title(); ?>"<span class="archive__catCount"><<?php echo $wp_query->found_posts; ?>件></span></h3>
			<?php } else { ?>
				<div class="archive__taxTitleWrapper"><h2 class="archive__taxTitle">KEY WORD</h2></div>
				<h3 class="archive__titleCategory">"<?php single_term_title(); ?>"<span class="archive__catCount"><<?php echo $wp_query->found_posts; ?>件></span></h3>
		<?php } ?>
		<section>
			<ul class="archive__columnList">
				<?php if (have_posts()): ?>
					<?php while (have_posts()) : the_post(); ?>
						<li class="archive__columnItem">
							<a href="<?php the_permalink(); ?>">
								<article class="archive__columnArticle">
									<?php if (has_post_thumbnail()) { ?>
										<?php the_post_thumbnail(); ?>
									<?php } else { ?>
										<img src="" alt="no image">
										<?php }?>
										<?php $terms = get_the_terms('', 'column_category'); ?>
										<div class="archive__articlePostData">
											<?php if ($terms) { ?>
												<?php foreach ($terms as $term) { ?>
													<span class="archive__category category-<?php echo$term->slug; ?>"><?php echo $term->name; ?></span>
												<?php } ?>
											<?php } ?>
											<time class="archive__articleDate"><?php echo get_the_date( 'Y/m/d' ); ?></time>
										</div>
									<h2 class="archive__itemTitle"><?php the_title(); ?></h2>
								</article>
							</a>
						</li>
					<?php endwhile; ?>
				<?php else: ?>
					<p>準備中です</p>
				<?php endif; ?>
			</ul>
			<?php get_template_part('template-parts/pagination'); ?>
		</section>
		<section class="archive__keyword">
			<h2 class="archive__keywordHeading">
				<span class="sr-only">KEY WORD</span>
				<img
					src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/keyword_header.svg"
					alt="KEY WORD"
					>
				</a>
			</h2>
			<span class="archive__subHeading">人気のキーワード</span>
			<?php get_template_part('template-parts/popular-keywords'); ?>
			<div class="archive__userActionArea">
				<div class="archive__userActionAreaSearch">
					<h2 class="archive__searchHeading">
						<span class="sr-only">SEARCH</span>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/search_header.svg"
							alt="SEARCH"
							>
					</h2>
					<?php get_template_part('template-parts/searchform'); ?>
					<!-- <h2 class="archive__categoryHeading">
						<span class="sr-only">CATEGORY</span>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/category_header.svg"
							alt="CATEGORY"
						>
					</h2>
					<?php get_template_part('template-parts/search-category'); ?> -->
					<h2 class="archive__pushNoticeHeading">
						<span class="sr-only">プッシュ通知を購読</span>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/push_notice_header.svg"
							alt="プッシュ通知を購読"
						>
					</h2>
					<a href="" class="archive__pushNoticeButton">購読する</a>
				</div>
				<div class="archive__twitterArea -pc">
					<a class="twitter-timeline" data-height="100%" href="https://twitter.com/noutore_info?ref_src=twsrc%5Etfw">Tweets by noutore_info</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="archive__twitterArea -sp">
					<a class="twitter-timeline -sp" data-lang="ja" data-height="400" href="https://twitter.com/noutore_info?ref_src=twsrc%5Etfw">Tweets by noutore_info</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</section>
		<section class="archive__bannerArea">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/brain_training_editor.png" alt="「脳トレ」編集部" class="bannerImage -full">
			<?php get_template_part('template-parts/banners'); ?>
			<div class="banners">
				<div class="banner">
					<h3 class="prHeading">「脳トレ」セミナー動画＆マニュアル</h3>
					<a href="https://blue-bird-love.com/love-manual/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner03.jpg" alt="「脳トレ」セミナー動画＆マニュアル" class="bannerImage"></a>
				</div>
				<div class="banner">
					<h3 class="prHeading">「脳トレ」スタートブック</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner04.jpg" alt="「脳トレ」スタートブック" class="bannerImage">
				</div>
			</div>
		</section>

<?php
get_sidebar();
get_footer();
