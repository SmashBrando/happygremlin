<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HappyGremlin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<?php
$logo = '';
$logo = get_field('logo', 'option');
?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'happygremlin' ); ?></a>
	<div class="toolbar">
		<div class="container">
			<div class="support">
			Questions? Do you need help? <a href="/contact/">Contact Us!</a>
			</div>
			<div class="account">
			Welcome visitor, if you have and account <a href="">Log in</a>, or <a href="">Register</a>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo $logo['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
		</div><!-- .site-branding -->
		<div class="navbar">
			<nav id="site-navigation" class="main-navigation container" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'happygremlin' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php
	if ( is_front_page() ) {
	    get_template_part('acf-layouts/homepage-banner');
	} else {
	}
	?>
	<div id="content" class="site-content container">
