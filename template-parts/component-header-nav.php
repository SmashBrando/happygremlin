<?php

?>

<div id="" class="main-nav" role="banner">
	<nav id="main-navigation" class="main-navigation container" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'happy-gremlin' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->
</div><!-- #masthead -->