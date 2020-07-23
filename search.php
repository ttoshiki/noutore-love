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

<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $search_query = get_search_query();
?>

	<main class="archive__main">
		<div class="archive__taxTitleWrapper"><h1 class="archive__taxTitle">SEARCH WORD</h1></div>
		<h2 class="archive__titleCategory">"<?php echo $search_query; ?>"<span class="archive__catCount">（<?php echo $total_results; ?>件）</span></h2>
    <section>
			<?php if (have_posts()): ?>
				<ul class="archive__columnList">
					<?php while (have_posts()) : the_post(); ?>
						<li class="archive__columnItem">
							<a href="<?php the_permalink(); ?>">
								<article class="archive__columnArticle">
									<?php if (has_post_thumbnail()) { ?>
										<?php the_post_thumbnail(); ?>
									<?php } else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="no image">
										<?php }?>
										<?php $terms = get_the_terms('', 'column_category'); ?>
										<div class="archive__articlePostData">
											<?php if ($terms) { ?>
												<?php foreach ($terms as $term) { ?>
													<span class="archive__category category-<?php echo$term->slug; ?>"><?php echo $term->name; ?></span>
												<?php } ?>
											<?php } ?>
											<time class="archive__articleDate"><?php echo get_the_date('Y/m/d'); ?></time>
										</div>
									<h2 class="archive__ItemTitle"><?php the_title(); ?></h2>
								</article>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php else: ?>
				<p class="archive__noPosts">該当する記事がありませんでした。</p>
			<?php endif; ?>
    </section>
		<?php get_template_part('template-parts/pagination'); ?>
    <section class="archive__column">
      <!-- <h2 class="archive__columnHeading">
        <span class="sr-only">COLUMN</span>
        <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/column_header.svg"
        alt="COLUMN"
        class=""
        >
      </h2> -->
      <!-- <span class="archive__subHeading">「脳トレ」コラム</span> -->
      <!-- <ul class="archive__columnCategoryList">
        <li class="cat-item"><a href="<?php echo home_url('/column/') ?>">最新記事</a></li>
        <?php
          $terms = get_terms('column_category');
          foreach ($terms as $term) {
              echo '<li class="cat-item cat-' . $term->slug . '"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
          }
          ?>
      </ul> -->
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
					<!-- <h2 class="archive__pushNoticeHeading">
						<span class="sr-only">プッシュ通知を購読</span>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/push_notice_header.svg"
							alt="プッシュ通知を購読"
						>
					</h2>
					<a href="" class="archive__pushNoticeButton">購読する</a> -->
				</div>
				<div class="archive__twitterArea">
					<a class="twitter-timeline" data-height="100%" href="https://twitter.com/noutore_info?ref_src=twsrc%5Etfw">Tweets by noutore_info</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
