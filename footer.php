<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Everal
 * @since Everal 1.0
 */
?>

		</div><!-- #main -->

		<div class="site-footer-wrapper">
			<div class="site-footer-container container">
				<footer id="colophon" class="site-footer row" role="contentinfo">
					<?php get_sidebar( 'footer' ); ?>
				</footer><!-- #colophon -->
			</div>
			<div class="site-info col-sm-12 col-md-12 col-lg-12">
				<div class="site-info-content container">
					<div class="copyright">
						<?php echo ot_get_option('copyright_text'); ?> 
						<?php _e( 'Created by', 'everal' ); ?> <a href="http://cohhe.com/">Cohhe</a>. 
						<?php _e( 'Proudly powered by', 'everal' ); ?> <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'everal' ) ); ?>"><?php _e( 'WordPress', 'everal' ); ?></a>
					</div>
					<div class="footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'footer-menu',
									'depth'          => 1
								)
							);
						?>
					</div>
				</div>
				<?php 
				$show_scroll_to_top = ot_get_option('show__scroll_to_top__button');

				if ( !isset( $show_scroll_to_top[0] ) ) {
					$show_scroll_to_top[0] = 'false';
				}

				if ( $show_scroll_to_top[0] == 'true' ) {
				?>
					<a class="scroll-to-top" href="#"><?php _e( 'Up', 'everal' ); ?></a>
				<?php
				}
				?>
			</div><!-- .site-info -->
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>