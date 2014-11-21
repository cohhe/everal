<?php
/**
 * The template for displaying featured content
 *
 * @package WordPress
 * @subpackage Everal
 * @since Everal 1.0
 */
?>

<div class="featured-slider">
	<div id="featured-content" class="featured-content swiper-container">
		<div class="featured-content-inner swiper-wrapper">
		<?php
			/**
			 * Fires before the Everal 1.0 featured content.
			 *
			 * @since Everal 1.0
			 */
			do_action( 'everal_featured_posts_before' );

			$featured_posts = everal_get_featured_posts();
			foreach ( (array) $featured_posts as $order => $post ) :
				setup_postdata( $post );

				 // Include the featured content template.
				get_template_part( 'content', 'featured-post' );
			endforeach;

			/**
			 * Fires after the Everal 1.0 featured content.
			 *
			 * @since Everal 1.0
			 */
			do_action( 'everal_featured_posts_after' );

			wp_reset_postdata();
		?>
		</div><!-- .featured-content-inner -->
	</div><!-- #featured-content .featured-content -->
	<div class="tabs-container container">
		<div class="tabs-row row">
			<div class="tabs col-sm-8 col-md-8 col-lg-8">
				<?php
				$s_i = 0;
				foreach ( (array) $featured_posts as $order => $post ) :
					setup_postdata( $post );
					$s_class = '';

					if ( $s_i == 0 )
						$s_class = 'active';

					?>
					<a href="#" class="<?php echo $s_class; ?>"><date><?php the_date(); ?></date><h4><?php the_title(); ?></h4></a>
					<?php
					$s_i++;
				endforeach;
				?>
			</div>
		</div>
	</div>
</div><!-- .featured-slider -->