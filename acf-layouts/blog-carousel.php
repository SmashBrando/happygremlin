<?php

//define the variables
$title = '';

//set the variables
$title = get_sub_field('title'); //text

?>

<section class="blog-carousel">
	<div class="carousel-header">
		<h2 class="section-title"><?php echo $title ?></h2>
		<div class="arrows"></div>
	</div>
	<div class="blog-items">
	<?php
		// The Query
		$args = array(
			'posts_per_page'      => 8
		);
		query_posts( $args );

		// The Loop
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-blogitem' );
		endwhile;

		// Reset Query
		wp_reset_query();
	?>
	</div>
</section>