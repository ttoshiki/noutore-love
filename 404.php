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

	<main class="notFound__main">
		<section class="notFound__inner">
			<h2 class="notFound__heading">404 Not Found</h2>
			<p class="notFound__text">お探しのページは見つかりませんでした。</p>
			<span class="notFound__en">The page you’re looking for  can’t be found.</span>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/404_illust.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/404_illust@2x.png" alt="" class="notFound__image"></a>
		</section>

<?php
get_sidebar();
get_footer();
