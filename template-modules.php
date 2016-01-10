<?php
/**
 * Template Name: Modular Template
 *
 * @package HappyGremlin
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_template_part('acf-layouts/acf-modules'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer();