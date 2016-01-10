<?php

//define the variables
$title = '';
$product_type = '';

//set the variables
$title = get_sub_field('title'); //text
$product_type = get_sub_field('product_type'); //select

// [recent_products per_page=12]
// [featured_products per_page=12]
// [sale_products per_page=12]

?>

<section class="product-carousel">
	 <h2 class="section-title"><?php echo $title ?></h2>
	 <div class="product-carousel-items">
	 	<?php if($product_type == 'featured'): ?>
	 		<?php echo do_shortcode( '[recent_products per_page=8 columns=12]' ) ?>
	 	<?php elseif($product_type == 'new'): ?>
	 		<?php echo do_shortcode( '[featured_products per_page=8 columns=12]' ) ?>
		<?php elseif($product_type == 'sale'): ?>
			<?php echo do_shortcode( '[sale_products per_page=8 columns=12]' ) ?>
		<?php endif; ?>
	 </div>
</section>