<?php

/**
 * Enqueue scripts and styles.
 */
function happy_gremlin_scripts() {

	global $happy_gremlin_version;

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic' , '', $happy_gremlin_version);
	
	wp_enqueue_style( 'happy-gremlin-style', get_stylesheet_uri() , '', $happy_gremlin_version);

	wp_enqueue_script( 'happy-gremlin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'happy-gremlin-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '', true );

	wp_enqueue_script( 'happy-gremlin-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'happy_gremlin_scripts' );