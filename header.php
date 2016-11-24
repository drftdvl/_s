<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<style>
@font-face
{
	font-family: Aleo;
	font-size: 23px;
	src: url('/box/wp-content/themes/_s/fonts/Aleo-Regular.otf');
}
</style>

<body <?php body_class(); ?>>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</header>
-->

	<?php if (is_page_template('home.php') || is_page_template('about.php')){ ?>
	<div id="content" class="site-content">
	<!-- <div class="container"> -->
	<div class="navbar-fixed">
		<nav class="black" style="opacity: 0.5;">
			<div class="brand-logo center">
			    <div class="nav-wrapper">
				      <ul id="nav-mobile" class="center hide-on-med-and-down">
				      	<li><a href="<?php get_home_url(); ?> /box" style="color: #ffffff; font-family: Aleo">HOME</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/about" style="color: #ffffff; font-family: Aleo">ABOUT US</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/feature" style="color: #ffffff; font-family: Aleo">FEATURE</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/tracker" style="color: #ffffff; font-family: Aleo">TRACKER</a></li>
				      	<?php if (is_user_logged_in()) : ?>
						    <li><a href="<?php echo wp_logout_url(home_url()); ?>" style="color: #ffffff; font-family: Aleo">LOGOUT</a></li>
						<?php else : ?>
						    <li><a href="<?php echo wp_login_url(home_url()); ?>" style="color: #ffffff; font-family: Aleo">LOGIN</a></li>
						<?php endif;?>
				      </ul>
			    </div>
			</div>
		</nav>
	</div>
	<?php }else{ ?>
	<div id="content" class="site-content">
	<!-- <div class="container"> -->
		<nav class="transparent">
			<div class="brand-logo center">
			    <div class="nav-wrapper">
				      <ul id="nav-mobile" class="center hide-on-med-and-down">
				      	<li><a href="<?php get_home_url(); ?> /box" style="color: #ffffff; font-family: Aleo">HOME</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/about" style="color: #ffffff; font-family: Aleo">ABOUT US</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/feature" style="color: #ffffff; font-family: Aleo">FEATURE</a></li>
				      	<li><a href="<?php get_home_url(); ?> /box/tracker" style="color: #ffffff; font-family: Aleo">TRACKER</a></li>
				      	<?php if (is_user_logged_in()) : ?>
						    <li><a href="<?php echo wp_logout_url(home_url()); ?>" style="color: #ffffff; font-family: Aleo">LOGOUT</a></li>
						<?php else : ?>
						    <li><a href="<?php echo wp_login_url(home_url()); ?>" style="color: #ffffff; font-family: Aleo">LOGIN</a></li>
						<?php endif;?>
				      </ul>
			    </div>
			</div>
		</nav>
	<?php } ?>
	<!-- </div> -->
