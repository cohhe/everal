<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Everal
 * @since Everal 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php
		$favicon = ot_get_option('favicon');

		if (!empty($favicon)) {
			$favicon = ot_get_option('favicon');
			echo '<link rel="shortcut icon" href="' . $favicon . '" />';
		}
	?>
	
	<?php wp_head(); ?>
</head>
<?php
global $site_width;

$form_class    = '';
$class         = '';
$site_width    = 'col-sm-12 col-md-12 col-lg-12';
$layout_type   = get_post_meta(get_the_id(), 'layouts', true);

if ( !isset($search_string) ) {
	$search_string = '';
}

if ( is_archive() || is_search() || is_404() ) {
	$layout_type = 'full';

} elseif (empty($layout_type)) {
	$layout_type = ot_get_option('everal_layout_style') ? ot_get_option('everal_layout_style') : 'full';
}

switch ($layout_type) {
	case 'right':
		define('EVERAL_LAYOUT', 'sidebar-right');
		break;
	case 'full':
		define('EVERAL_LAYOUT', 'sidebar-no');
		break;
	case 'left':
		define('EVERAL_LAYOUT', 'sidebar-left');
		break;
}

if ( ( EVERAL_LAYOUT == 'sidebar-left' && is_active_sidebar( 'sidebar-1' ) ) || ( EVERAL_LAYOUT == 'sidebar-right' && is_active_sidebar( 'sidebar-2' ) ) ) {
	$site_width = 'col-sm-8 col-md-8 col-lg-8';
}
?>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
		$logo = ot_get_option('website_logo');
	?>
	<header id="masthead" class="site-header" role="banner">
		<div class="search-toggle">
			<div class="search-content container">
				<form action="<?php echo home_url(); ?>" method="get" class="<?php echo $form_class; ?>">
					<input type="text" name="s" class="<?php echo $class; ?>" value="<?php echo $search_string; ?>" placeholder="<?php echo __('Search', 'everal'); ?>"/>
				</form>
			</div>
		</div>
		<div class="header-content container">
			<div class="header-main row">
				<div class="site-title col-xs-10 col-sm-10 col-md-2">
					<?php
					$large_logo_font_size = ot_get_option( 'large_logo_font_size' );
					$scrolled_logo_font_size = ot_get_option( 'scrolled_logo_font_size' );
					if ( $large_logo_font_size == '' ) {
						$large_logo_font_size = '50';
					}
					if ( $scrolled_logo_font_size == '' ) {
						$scrolled_logo_font_size = '34';
					}
					if ( ! empty ( $logo ) ) {?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo; ?>"></a>
						<?php
					} else { ?>
						<style type="text/css">
							a.site-title {
								font-size: <?php echo $large_logo_font_size.'px;'; ?>
							}
							.fixed.shrink a.site-title {
								font-size: <?php echo $scrolled_logo_font_size.'px;'; ?>
							}
							div.site-title {
								font-size: <?php echo $large_logo_font_size.'px;'; ?>
							}
							.fixed.shrink div.site-title {
								font-size: <?php echo $scrolled_logo_font_size.'px;'; ?>
							}
						</style>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title title-effect" data-letters="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php
						$description = get_bloginfo( 'description', 'display' );

						if ( ! empty ( $description ) ) { ?>
							<p class="site-description"><?php echo esc_html( $description ); ?></p>
						<?php
						}
					}
					?>
				</div>
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
				<button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="collapse" data-target=".site-navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<nav id="primary-navigation" class="col-xs-12 col-sm-10 col-md-10 site-navigation primary-navigation navbar-collapse collapse" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu_class'     => 'nav-menu',
								'depth'          => 3,
								'walker'         => new Header_Menu_Walker
							)
						);
					?>
				</nav>
				<?php } ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</header><!-- #masthead -->
	<?php
		if ( is_front_page() && everal_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>
	<div id="main" class="site-main container">
