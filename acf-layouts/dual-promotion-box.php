<?php

//define the variables
$promotion_alpha_image = '';
$promotion_alpha_link = '';
$promotion_beta_image = '';
$promotion_beta_link = '';


//set the variables
$promotion_alpha_image = get_sub_field('promotion_alpha_image'); //image
$promotion_alpha_link = get_sub_field('promotion_alpha_link'); //url
$promotion_beta_image = get_sub_field('promotion_beta_image'); //image
$promotion_beta_link = get_sub_field('promotion_beta_link'); //url

?>

<section class="dual-promotion-box">
	<div class="col-6">
		<a href="<?php echo $promotion_alpha_link; ?>">
			<img src="<?php echo $promotion_alpha_image['url']; ?>" alt="<?php echo $promotion_alpha_image['alt']; ?>" title="<?php echo $promotion_alpha_image['title']; ?>">
		</a>
	</div>
	<div class="col-6">
		<a href="<?php echo $promotion_beta_link; ?>">
			<img src="<?php echo $promotion_beta_image['url']; ?>" alt="<?php echo $promotion_beta_image['alt']; ?>" title="<?php echo $promotion_beta_image['title']; ?>">
		</a>
	</div>
</section>