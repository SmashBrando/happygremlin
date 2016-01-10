<?php

//define the variables
$promotion_image = '';
$promotion_link = '';

//set the variables
$promotion_image = get_sub_field('promotion_image'); //image
$promotion_link = get_sub_field('promotion_link'); //url

?>

<section class="promotion-box">
	<a href="<?php echo $promotion_link; ?>">
		<img src="<?php echo $promotion_image['url']; ?>" alt="<?php echo $promotion_image['alt']; ?>" title="<?php echo $promotion_image['title']; ?>">
	</a>
</section>