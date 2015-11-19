<?php
/**
 * Happy Gremlin 1.0 Theme Customizer.
 *
 * @package Happy_Gremlin_1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function happy_gremlin_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'happygremlin_logo', array(
	'default' => '',
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'transport' => '',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'happy_gremlin_logo', array(
	    'label'    => __( 'Logo', 'happygremlin' ),
	    'section'  => 'title_tagline',
	    'settings' => 'happygremlin_logo',
	) ) );





}
add_action( 'customize_register', 'happy_gremlin_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function happy_gremlin_customize_preview_js() {
	wp_enqueue_script( 'happy_gremlin_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'happy_gremlin_customize_preview_js' );
