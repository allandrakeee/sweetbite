<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sweetbite
 * @author Allan Drake
 */

get_header();
$container   = get_theme_mod( 'sweetbite_container_type' );
$sidebar_pos = get_theme_mod( 'sweetbite_sidebar_position' );

/**
 * Header hero
 * Batman, Superman, Deadpool, Wolverine, Ironman.
 */
header_hero();
?>

  <!-- Return to Top -->
  <a id="return-to-top"><i class="fa fa-chevron-up"></i></a>
	
<?php
get_footer();
