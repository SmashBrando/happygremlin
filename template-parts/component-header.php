<?php

?>

<div class="headers">
	<div class="container">
		<div class="site-branding">
			<?php if ( get_theme_mod( 'happygremlin_logo' ) ) : ?>
			    <div class='site-logo'>
			        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'happygremlin_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
			    </div>
			<?php else : ?>
			    <div>
			        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
			    </div>
			<?php endif; ?>


			
		</div><!-- .site-branding -->
		<!-- <div>
			<ul class="site-header-cart menu">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php //storefront_cart_link(); ?>
			</li>
			<li>
				<?php //the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
		</div> -->
	</div>
</div>
