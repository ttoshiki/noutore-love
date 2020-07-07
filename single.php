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

	<main class="single__main">
		<div class="single__inner">
			<?php if(have_posts()): while(have_posts()):the_post(); ?>
				<?php
					if( !is_user_logged_in() && !is_robots() ) { //クローラーとログイン時のアクセスをカウントから除外
						setPostViews( get_the_ID() );
					}
				?>
				<header class="single__header">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>
					<div class="single__headerText">
						<h2 class="single__title"><?php the_title(); ?></h2>
						<div class="single__metaData">
							<time datetime="<?php the_time('Y-m-d'); ?>" class="single__daytime"><?php the_time('Y.m.d'); ?></time>
							<?php $terms = get_the_terms('', 'column_category'); ?>
							<div class="single__categories">
								<?php if ($terms) { ?>
									<?php foreach ($terms as $term) { ?>
										<span class="single__category category-<?php echo$term->slug; ?>"><?php echo($term->name) ?></span>
									<?php } ?>
								<?php } ?>
								<span><?php the_category(', '); ?></span>
							</div>
						</div>
						<?php if( !(get_post_type() === 'post')): ?>
							<div class="single__contributor">
								<?php echo get_avatar( get_the_author_id(), 300 ); ?>
								<?php echo get_the_author(); ?>
							</div>
						<?php endif; ?>
					</div>
				</header>
				<div class="single__content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
			<div class="single__sns">
				<h3 class="single__snsHeading">Share</h3>
				<div class="single__snsWrapper">
					<a href="https://twitter.com/share?
						url=<?php echo get_the_permalink(); ?>&
						via=noutore_info&
						related=noutore_info&
						text=<?php echo the_title(); ?>"
						rel="nofollow"
						target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_twitter-color.svg" alt="Twitter" class="single__snsLogo"></>
				</div>
				<div class="single__snsWrapper">
					<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_facebook-color.svg" alt="Facebook" class="single__snsLogo"></a>
				</div>
				<div class="single__snsWrapper">
					<div class="line-it-button" data-lang="ja" data-type="share-c" data-ver="3" data-url="<?php echo get_the_permalink(); ?>" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
					<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
				</div>
			</div>
			<div class="single__relatedKeywords">
				<h3 class="single__footerHeading">関連するキーワード</h3>
				<ul class="single__relatedKeywordsList">
					<?php
						$catlist = wp_list_categories(array(
							'taxonomy' => 'keyword',
							'title_li' => '', // リストの外側に表示されるタイトルを非表示
						));
						echo $catlist; // タームの一覧を表示
					?>
				</ul>
			</div>
			<section class="single__follow">
				<div class="single__followHeadingWrapper">
					<h2 class="single__followHeading">
						<span class="sr-only">follow me</span>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/single_follow.svg"
							alt="follow me"
							>
					</h2>
				</div>
				<p class="single__followParagraph">
					忙しいあなたは<br />
					SNSで「脳トレ」をチェック！
				</p>
				<div class="single__followSns">
						<a href="https://twitter.com/noutore_info?s=20" class="single__followSnsLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_twitter.svg" alt="" class="single__followSnsIcon"></a>
						<a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="single__followSnsLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_line.svg" alt="" class="single__followSnsIcon"></a>
				</div>
			</section>
			<?php get_template_part('template-parts/breadcrumb'); ?>
		</div>
<?php
get_sidebar();
get_footer();
