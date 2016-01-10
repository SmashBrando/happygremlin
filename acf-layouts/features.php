<?php

//define the variables
$title = '';
$feature = '';

//set the variables
$title = get_sub_field('title'); //text
$feature = get_sub_field('feature'); //repeater

?>

<section class="features">
	<h2 class="section-title"><?php echo $title ?></h2>
	<?php if( have_rows('feature') ): ?>
		<?php while ( have_rows('feature') ) : the_row(); ?>
			<?php

			//define the variables 
			$feature_icon = '';
			$featured_title = '';
			$feature_content = '';

			//set the variables
			$feature_icon = get_sub_field('feature_icon'); //image
			$featured_title = get_sub_field('featured_title'); //text
			$feature_content = get_sub_field('feature_content'); //textarea

			?>
			<div class="feature">
				<div class="icon"><img src="<?php echo $feature_icon['url']; ?>" alt="<?php echo $feature_icon['alt']; ?>" title="<?php echo $feature_icon['title']; ?>"></div>
				<div class="title"><?php echo $featured_title; ?></div>
				<div class="content"><?php echo $feature_content; ?></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>