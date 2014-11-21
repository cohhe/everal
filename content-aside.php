<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Everal
 * @since Everal 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<span class="post-format post-format-aside">
			<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><span class="glyphicon glyphicon-th-list"></span></a>
		</span>
		<?php

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
		<div class="entry-meta">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && everal_categorized_blog() ) : ?>
				<span class="cat-links"><span class="glyphicon glyphicon-eye-open"></span><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'everal' ) ); ?></span>
			<?php
				endif;

				if ( 'post' == get_post_type() )
					everal_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><span class="glyphicon glyphicon-comment"></span><?php comments_popup_link( __( 'Leave a comment', 'everal' ), __( '1 Comment', 'everal' ), __( '% Comments', 'everal' ) ); ?></span>
			<?php
				endif;
			?>
			<?php the_tags( '<span class="tag-links"><span class="glyphicon glyphicon-tag"></span>', '', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php everal_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'everal' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'everal' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
			edit_post_link( __( 'Edit', 'everal' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
