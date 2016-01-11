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
		<?php $accordion_count = 0; ?>
		<?php while ( have_rows('accordion_item') ) : the_row(); ?>
			<?php

			//define the variables 
			$title = '';
			$content = '';

			//set the variables
			$title = get_sub_field('title'); //text
			$content = get_sub_field('content'); //textarea

			?>
		    <div class="accordion-section">
		        <a class="accordion-section-title <?php if($accordion_count == '0'): echo 'active'; endif; ?>" href="#accordion-<?php echo $accordion_count; ?>"><?php echo $title; ?></a>
		        <div id="accordion-<?php echo $accordion_count; ?>" class="accordion-section-content <?php if($accordion_count == '0'): echo 'open'; endif; ?>" style="<?php if($accordion_count == '0'): echo 'display:block;'; endif; ?>">
		            <?php echo $content; ?>
		        </div><!--end .accordion-section-content-->
		    </div><!--end .accordion-section-->
		<?php $accordion_count++; ?>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<div class="companion">
		<img src="<?php echo $graphic_companion['url']; ?>" alt="<?php echo $graphic_companion['alt']; ?>" title="<?php echo $graphic_companion['title']; ?>">
	</div>
</section>