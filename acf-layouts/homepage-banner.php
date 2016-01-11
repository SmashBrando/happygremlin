<?php

//define the variables
$title_apha = '';
$title_beta = '';
$introduction = '';
$button_text = '';
$button_link = '';
$overlay_position = '';
$graphic_overlay = '';
$background_image = '';

//set the variables
$title_alpha = get_field('title_alpha');//text
$title_beta = get_field('title_beta');//text
$introduction = get_field('introduction');//textarea
$button_text = get_field('button_text');//text
$button_link = get_field('button_link');//url
$overlay_position = get_field('overlay_position');//radio button
$graphic_overlay = get_field('graphic_overlay');//image
$background_image = get_field('background_image');//image

?>

<section class="homepage-banner" style="background-image: url(<?php echo $background_image['url']; ?>); height:<?php echo $background_image['height']; ?>px">
	<div class="container">
		<div class="row">
			<?php if($overlay_position == 'right'): ?>
			<div class="col-6">
				<div class="title-alpha"><?php echo $title_alpha; ?></div>
				<div class="title-beta"><?php echo $title_beta; ?></div>
				<div class="introduction"><?php echo $introduction; ?></div>
				<a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text; ?></a>
			</div>
			<div class="col-6 last">
				<img class="graphic-overlay" src="<?php echo $graphic_overlay['url']; ?>" alt="<?php echo $graphic_overlay['alt']; ?>" title="<?php echo $graphic_overlay['title']; ?>">
			</div>
			<?php elseif($overlay_position == 'left'): ?>
			<div class="col-6">
				<img class="graphic-overlay" src="<?php echo $graphic_overlay['url']; ?>" alt="<?php echo $graphic_overlay['alt']; ?>" title="<?php echo $graphic_overlay['title']; ?>">
			</div>
			<div class="col-6 last">
				<div class="title-alpha"><?php echo $title_alpha; ?></div>
				<div class="title-beta"><?php echo $title_beta; ?></div>
				<div class="introduction"><?php echo $introduction; ?></div>
				<a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text; ?></a>
			</div>
			<?php elseif($overlay_position == 'none'): ?>
				<div class="title-alpha"><?php echo $title_alpha; ?></div>
				<div class="title-beta"><?php echo $title_beta; ?></div>
				<div class="introduction"><?php echo $introduction; ?></div>
				<a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text; ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>