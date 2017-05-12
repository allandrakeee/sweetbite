<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sweetbite
 * @author Solomon Culaste
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
	<div id="wrapper-page" class="wrapper">
		<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
			<div class="row">
				<!-- Do the left sidebar check and opens the primary div -->
				<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

					<main class="site-main" id="main">
						<?php
						if ( have_posts() ) :
							/* Start the loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'loop-templates/content', get_post_format() );
							endwhile;
						else:
							get_template_part( 'loop-templates/content', 'none' );
						endif;
						?>
					</main>
					<!-- The pagination component -->
					<?php sweetbite_pagination(); ?>
				</div><!--#primary end-->
				<?php
				/* Do the right sidebar check */
				if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos )
					get_template_part( 'inc/sidebars/sidebar-right.php' );
				?>
			</div><!--.row end-->
		</div><!--#content end-->
	</div><!--#wrapper end-->
<?php
get_footer();
