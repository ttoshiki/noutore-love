<?php

get_header();
?>

	<main class="page__main">
		<section class="page__inner">
			<?php while (have_posts()) : ?>
				<h1><?php the_title(); ?></h1>
				<?php
                    the_post();
                    the_content();
                endwhile;
                ?>
		</section>

<?php
get_sidebar();
get_footer();
