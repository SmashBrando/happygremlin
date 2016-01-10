<?php

// check if the flexible content field has rows of data
if( have_rows('module') ):

     // loop through the rows of data
    while ( have_rows('module') ) : the_row();

        if( get_row_layout() == 'basic_content_editor' ):

        	get_template_part( 'acf-layouts/basic-content-editor' );

        elseif( get_row_layout() == 'promotion_box' ):

        	get_template_part( 'acf-layouts/promotion-box' );

        elseif( get_row_layout() == 'dual_promotion_box' ):

        	get_template_part( 'acf-layouts/dual-promotion-box' );

        elseif( get_row_layout() == 'features' ):

        	get_template_part( 'acf-layouts/features' );

        elseif( get_row_layout() == 'accordion_features' ):

        	get_template_part( 'acf-layouts/accordion-features' );

        elseif( get_row_layout() == 'blog_carousel' ):

        	get_template_part( 'acf-layouts/blog-carousel' );

        elseif( get_row_layout() == 'product_carousel' ):

        	get_template_part( 'acf-layouts/product-carousel' );

        elseif( get_row_layout() == 'brands_carousel' ):

        	get_template_part( 'acf-layouts/brands-carousel' );

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>