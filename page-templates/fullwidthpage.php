<?php
/**
 * Template Name: Full Width Page
 *
 * @description Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sweetbite
 * @author Allan Drake
 */

get_header();
$container = get_theme_mod( 'sweetbite_container_type' );

/**
 * Header hero
 * Batman, Superman, Deadpool, Wolverine, Ironman.
 */
header_hero();
?>
	<div id="full-width-page-wrapper" class="wrapper py-0">
			<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
				<div class="row">
	                <div id="primary" class="col-md-12">
						<main class="site-main" id="main">
							<?php
							if ( have_posts() ) :
								/* Start the loop */
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;
							else:
								get_template_part( 'loop-templates/content', 'none' );
							endif;
							?>
						</main>
						<!-- The pagination component -->
						<?php sweetbite_pagination(); ?>
					</div><!--.column end-->
				</div><!--.row end-->
			</div><!--#content end-->
	</div><!--#wrapper end-->
<?php
get_footer();
