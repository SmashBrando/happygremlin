<?php echo $args['before_widget']; ?>

<div class="flexslider <?php echo $widget_custom_id; ?>" style="">
	<div class="carousel-header">
	<h1>
		<?php if ( ! empty( $instance['happygremlin_title'] ) ) {
				echo $args['happygremlin_title'] . apply_filters( 'happygremlin_title', $instance['happygremlin_title'] ). $args['happygremlin_title'];
			}
		?>
	</h1>
	<div class="arrows"></div>
	</div>
	<ul class="slides">
		<?php
			$this_meta_key = $instance['happygremlin_product_feed'];
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 12,
				'meta_key' => $this_meta_key
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post();
					wc_get_template_part( 'content', 'product' );
				endwhile;
			} else {
				echo __( 'No products found' );
			}
			wp_reset_postdata();
		?>
	</ul><!--/.products-->
</div>
<?php echo $args['after_widget']; ?>