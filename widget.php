<?php ?>


<div class="flexslider" style="">
	<div class="arrows"></div>
	<ul class="slides">
		<?php
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 12,
				'meta_key' => '_featured'
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
<script type="text/javascript">
	(function($) {

		(function() {

		  // store the slider in a local variable
		  var $window = $(window),
		      flexslider;
		 
		  // tiny helper function to add breakpoints
		  function getGridSize() {
		    return (window.innerWidth < 300) ? 1 :
		     	   (window.innerWidth < 600) ? 2 :
		           (window.innerWidth < 900) ? 3 : 4;
		  }
		 
		  // $(function() {
		  //   SyntaxHighlighter.all();
		  // });
		 
		  $window.load(function() {
		    $('.flexslider').flexslider({
		      animation: "slide",
		      slideshow: false,
		      animationLoop: false,
		      itemWidth: 300,
		      itemMargin: 10,
		      minItems: getGridSize(), // use function to pull in initial value
		      maxItems: getGridSize(), // use function to pull in initial value
		      controlNav: false,
		      controlsContainer: ".arrows",
		      start: function (slider) {
			        flexslider = slider; //Initializing flexslider here.
			    }
		    });
		  });
		 
		  // check grid size on resize event
		  $window.resize(function() {
		    var gridSize = getGridSize();
		 
		    flexslider.vars.minItems = gridSize;
		    flexslider.vars.maxItems = gridSize;
		  });

		}());

	})(jQuery);
</script>