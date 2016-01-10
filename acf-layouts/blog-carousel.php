<?php

//define the variables
$title = '';

//set the variables
$title = get_sub_field('title'); //text

?>

<section class="blog-carousel">
<?php
	// The Query
	$args = array(
		'posts_per_page'      => 8
	);
	query_posts( $args );

	// The Loop
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content' );
	endwhile;

	// Reset Query
	wp_reset_query();
?>
</section>