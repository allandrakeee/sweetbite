<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sweetbite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
		
		<div class="container">
			<!--The toggler button on mobile view-->
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#site-header-navbar" aria-controls="site-header-navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!--Site branding-->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home"><img class="header-logo" src="http://sweetbite.wordpress.dev/wp-content/uploads/sites/6/2017/04/logo-e1492725167680.png" alt=""></a>
		<!-- The Wordpress menu goes here -->
		<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'site-header-navbar',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'walker'          => new WP_Bootstrap_Navwalker()
				)
			);
		?>
		</div>
	</nav>