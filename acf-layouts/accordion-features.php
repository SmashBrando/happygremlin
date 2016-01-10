<?php

//define the variables
$title = '';
$accordion_item = '';
$graphic_companion = '';

//set the variables
$title = get_sub_field('title'); //text
$accordion_item = get_sub_field('accordion_item'); //repeater
$graphic_companion = get_sub_field('graphic_companion'); //image

?>

<section class="accordion-features">
	<h2 class="section-title"><?php echo $title ?></h2>
	<?php if( have_rows('accordion_item') ): ?>
		<div class="accordion">
		<?php while ( have_rows('accordion_item') ) : the_row(); ?>
			<?php

			//define the variables 
			$title = '';
			$content = '';

			//set the variables
			$title = get_sub_field('title'); //text
			$content = get_sub_field('content'); //textarea

			?>
			<div class="accordion-item">
				<div class="title"><?php echo $title; ?></div>
				<div class="content"><?php echo $content; ?></div>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>