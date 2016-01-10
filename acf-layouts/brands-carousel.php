<?php

//define the variables
$title = '';

//set the variables
$title = get_sub_field('title'); //text

?>

<section class="brands-carousel">
	 <h2 class="section-title"><?php echo $title ?></h2>
	 <div class="brand-carousel-items">
	 	<?php echo do_shortcode('[product_brand_thumbnails columns=16 number=16]') ?>
	 </div>
</section>