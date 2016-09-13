<?php
/**
 * Everal 1.0 functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Everal
 * @since Everal 1.0
 */

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( get_template_directory() . '/theme-options.php' );

/**
 * Set up the content width value based on the theme's design.
 *
 * @see everal_content_width()
 *
 * @since Everal 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

/**
 * Everal 1.0 only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'everal_setup' ) ) :
/**
 * Everal 1.0 setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Everal 1.0
 */
function everal_setup() {
	require(get_template_directory() . '/inc/metaboxes/layouts.php');
	require_once(get_template_directory() . '/inc/admin/welcome-screen/welcome-screen.php');

	/*
	 * Make Everal 1.0 available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Everal 1.0, use a find and
	 * replace to change 'everal' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'everal', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css' ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'everal-full-width', 1170, 600, true );
	add_image_size( 'everal-huge-width', 1800, 600, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'everal' ),
		'footer'    => __( 'Footer menu', 'everal' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'everal_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'everal_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	add_theme_support( 'title-tag' );
}
endif; // everal_setup
add_action( 'after_setup_theme', 'everal_setup' );

// Admin CSS
function everal_admin_css() {
	wp_enqueue_style( 'vh-admin-css', get_template_directory_uri() . '/css/wp-admin.css' );
}

add_action('admin_head','everal_admin_css');

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Everal 1.0
 *
 * @return void
 */
function everal_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'everal_content_width' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Everal 1.0
 *
 * @return array An array of WP_Post objects.
 */
function everal_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Everal 1.0.
	 *
	 * @since Everal 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'everal_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Everal 1.0
 *
 * @return bool Whether there are featured posts.
 */
function everal_has_featured_posts() {
	return ! is_paged() && (bool) everal_get_featured_posts();
}

/**
 * Register three Everal 1.0 widget areas.
 *
 * @since Everal 1.0
 *
 * @return void
 */
function everal_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'everal' ),
		'id'            => 'sidebar-1',
		'class'			=> 'col-sm-4 col-md-4 col-lg-4',
		'description'   => __( 'Main sidebar that appears on the left.', 'everal' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="divider"><h3 class="widget-title">',
		'after_title'   => '</h3><div class="separator"></div></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'everal' ),
		'id'            => 'sidebar-2',
		'class'			=> 'col-sm-4 col-md-4 col-lg-4',
		'description'   => __( 'Additional sidebar that appears on the right.', 'everal' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="divider"><h3 class="widget-title">',
		'after_title'   => '</h3><div class="separator"></div></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 1', 'everal' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'everal' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="divider"><h3 class="widget-title">',
		'after_title'   => '</h3><div class="separator"></div></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2', 'everal' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears in the footer section of the site.', 'everal' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="divider"><h3 class="widget-title">',
		'after_title'   => '</h3><div class="separator"></div></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 3', 'everal' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears in the footer section of the site.', 'everal' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="divider"><h3 class="widget-title">',
		'after_title'   => '</h3><div class="separator"></div></div>',
	) );
}
add_action( 'widgets_init', 'everal_widgets_init' );

/**
 * Register Google fonts for Everal 1.0.
 *
 * @since Everal 1.0
 *
 * @return string
 */
function everal_font_url() {
	$fonts_url     = '';
	$roboto        = ot_get_option('google_font_roboto');
	$roboto_slab   = ot_get_option('google_font_roboto_slab');
	$open_sans     = ot_get_option('google_font_open_sans');

	$font_families = array();
	
	if ( 'off' !== $roboto ) {
		$font_families[] = 'Roboto:400,100,300,700,900';
	}

	if ( 'off' !== $roboto_slab ) {
		$font_families[] = 'Roboto+Slab:400,100,300,700';
	}

	if ( 'off' !== $open_sans ) {
		$font_families[] = 'Open+Sans:400,300,700';
	}

	if ( !empty($font_families) ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin' ),
		);

		$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Everal 1.0
 *
 * @return void
 */
function everal_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() );

	// Add Google fonts
	// wp_register_style('googleFonts');
	wp_enqueue_style( 'googleFonts', everal_font_url());

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'everal-style', get_stylesheet_uri(), array( 'genericons' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'everal-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}

	if ( is_front_page() ) {
		wp_enqueue_script( 'everal-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
	}

	wp_enqueue_script( 'everal-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20131209', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '20131209', true );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array() );
}
add_action( 'wp_enqueue_scripts', 'everal_scripts' );

// Admin Javascript
add_action( 'admin_enqueue_scripts', 'everal_admin_scripts' );
function everal_admin_scripts() {
	wp_register_script('master', get_template_directory_uri() . '/inc/js/admin-master.js', array('jquery'));
	wp_enqueue_script('master');
}

if ( ! function_exists( 'everal_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Everal 1.0
 *
 * @return void
 */
function everal_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Everal 1.0 attachment size.
	 *
	 * @since Everal 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'everal_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Everal 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function everal_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	return $classes;
}
add_filter( 'body_class', 'everal_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Everal 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function everal_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'everal_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Everal 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function everal_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'everal' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'everal_wp_title', 10, 2 );

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Theme Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}

/**
 * Create HTML list of nav menu items.
 * Replacement for the native Walker, using the description.
 *
 * @see    http://wordpress.stackexchange.com/q/14037/
 * @author toscho, http://toscho.de
 */
class Header_Menu_Walker extends Walker_Nav_Menu {

	/**
	 * Start the element output.
	 *
	 * @param  string $output Passed by reference. Used to append additional content.
	 * @param  object $item   Menu item data object.
	 * @param  int $depth     Depth of menu item. May be used for padding.
	 * @param  array $args    Additional strings.
	 * @return void
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes         = empty ( $item->classes ) ? array () : (array) $item->classes;
		$has_description = '';

		$class_names = join(
			' '
		,   apply_filters(
				'nav_menu_css_class'
			,   array_filter( $classes ), $item
			)
		);

		// insert description for top level elements only
		// you may change this
		$description = ( ! empty ( $item->description ) )
			? '<small>' . esc_attr( $item->description ) . '</small>' : '';

		$has_description = ( ! empty ( $item->description ) )
			? 'has-description ' : '';

		! empty ( $class_names )
			and $class_names = ' class="' . $has_description . esc_attr( $class_names ) . '"';

		$output .= "<li id='menu-item-$item->ID' $class_names>";

		$attributes  = '';

		if ( !isset($item->target) ) {
			$item->target = '';
		}

		if ( !isset($item->attr_title) ) {
			$item->attr_title = '';
		}

		if ( !isset($item->xfn) ) {
			$item->xfn = '';
		}

		if ( !isset($item->url) ) {
			$item->url = '';
		}

		if ( !isset($item->title) ) {
			$item->title = '';
		}

		if ( !isset($item->ID) ) {
			$item->ID = '';
		}

		if ( !isset($args->link_before) ) {
			$args = new stdClass();
			$args->link_before = '';
		}

		if ( !isset($args->before) ) {
			$args->before = '';
		}

		if ( !isset($args->link_after) ) {
			$args->link_after = '';
		}

		if ( !isset($args->after) ) {
			$args->after = '';
		}

		! empty( $item->attr_title )
			and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
			and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
		! empty( $item->xfn )
			and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
		! empty( $item->url )
			and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$item_output = $args->before
			. "<a $attributes>"
			. $args->link_before
			. '<span>' . $title . '</span>'
			. $description
			. '</a> '
			. $args->link_after
			. $args->after;

		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters(
			'walker_nav_menu_start_el'
		,   $item_output
		,   $item
		,   $depth
		,   $args
		);
	}
}

function everal_admin_rating_notice() {
	$user = wp_get_current_user();
	?>
	<div class="everal-rating-notice">
		<span class="everal-notice-left">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-square.png" alt="">
		</span>
		<div class="everal-notice-center">
			<p>Hi there, <?php echo $user->data->display_name; ?>, we noticed that you've been using Everal for a while now.</p>
			<p>We spent many hours developing this free theme for you and we would appriciate if you supported us by rating it!</p>
		</div>
		<div class="everal-notice-right">
			<a href="https://wordpress.org/support/view/theme-reviews/everal?rate=5#postform" class="button button-primary button-large everal-rating-rate">Rate at WordPress</a>
			<a href="javascript:void(0)" class="button button-large preview everal-rating-dismiss">No, thanks</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php
}
if ( get_option('everal_rating_notice') && get_option('everal_rating_notice') != 'hide' && time() - get_option('everal_rating_notice') > 432000 ) {
	add_action( 'admin_notices', 'everal_admin_rating_notice' );
}

function everal_dismiss_rating_notice() {
	update_option('everal_rating_notice', 'hide');

	die(0);
}
add_action( 'wp_ajax_nopriv_everal_dismiss_notice', 'everal_dismiss_rating_notice' );
add_action( 'wp_ajax_everal_dismiss_notice', 'everal_dismiss_rating_notice' );

function everal_theme_activated() {
	if ( !get_option('everal_rating_notice') ) {
		update_option('everal_rating_notice', time());
	}
}
add_action('after_switch_theme', 'everal_theme_activated');