<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
$current_theme = wp_get_theme();
?>

<div id="getting_started" class="welcome-screen-tab-pane active">

	<div class="everal-tab-pane-center">

		<h1 class="everal-welcome-screen-title">Welcome to Everal!</h1>

		<p><?php esc_html_e( 'Everal is FREE and clean, modern, user friendly, highly customizable and responsive Wordpress blog theme, built for especially for you.','everal'); ?></p>
		<p><?php esc_html_e( 'To ensure you have the best experience while using Everal, we have created this simple dashboard. Here you will find all information necessary to start using your theme.', 'everal' ); ?>

	</div>

	<hr />

	<div class="everal-tab-pane-center">

		<h1><?php esc_html_e( 'Documentation', 'everal' ); ?></h1>
		<p><?php esc_html_e( 'In case you need help with Everal, plese check the detailed documentation.', 'everal' ); ?></p>
		<p><a href="http://documentation.cohhe.com/everal" class="button button-primary" target="_blank"><?php esc_html_e( 'View documentation', 'everal' ); ?></a></p>

	</div>

	<hr />

	<div class="everal-tab-pane-center">

		<h1><?php esc_html_e( 'Getting started', 'everal' ); ?></h1>

		<h4><?php esc_html_e( 'Customize everything in a single place.' ,'everal' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'everal' ); ?></p>
		<p><a href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'everal' ); ?></a></p>

	</div>

	<hr />

	<div class="everal-tab-pane-center">

		<h1><?php esc_html_e( 'Get a whole new look for your site', 'everal' ); ?></h1>

		<p><?php esc_html_e( 'Below you will find a selection of Cohhe themes that will totally transform the look of your site.', 'everal' ); ?></p>

	</div>

	<div class="everal-tab-pane-half everal-tab-pane-first-half">

		<!-- Jobera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/jobera.png'; ?>" alt="<?php esc_html_e( 'Jobera Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Jobera', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Jobera — the easiest to use job board theme available. Create a community of employers and prospective employees.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Jobera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Jobera</span>
						<a href="https://cohhe.com/project-view/jobera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Jobera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=jobera"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Jobera - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Viva Hotel -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/viva.png'; ?>" alt="<?php esc_html_e( 'Viva Hotel Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Viva Hotel', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Viva hotel is a WordPress theme designed for hotels, hostels, resorts, spas and any other type of service which requires a booking type system.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Viva Hotel' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Viva Hotel</span>
						<a href="https://cohhe.com/project-view/viva-hotel/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Viva Hotel</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=viva"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Viva Hotel - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Seatera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/seatera.png'; ?>" alt="<?php esc_html_e( 'Seatera Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Seatera', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Seatera is a powerful, feature-rich seat reservation WordPress theme which is suitable for any type of cinema, movie promotion, theaters, blogs and movie communities. Seatera lets you customize a wide variety of features from the comfort of your Dashboard.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Seatera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Seatera</span>
						<a href="https://cohhe.com/project-view/seatera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Seatera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=seatera"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Seatera - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Mobera -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/mobera.png'; ?>" alt="<?php esc_html_e( 'Mobera Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Mobera', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Mobera is clean and modern MultiPurpose App Showcase WordPress Theme. Elegant objects and background’s animation, neat execution, attention to details and the broadest settings spectrum.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Mobera' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Mobera</span>
						<a href="https://cohhe.com/project-view/mobera/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Mobera</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=mobera"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Mobera - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Environmental -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/environmental.jpg'; ?>" alt="<?php esc_html_e( 'Environmental Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Environmental', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Environmental is a beautiful, responsive WordPress theme designed specifically for the needs of non-profits who do environment or humanitarian work.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Environmental' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Environmental</span>
						<a href="https://cohhe.com/project-view/environmental/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Environmental</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=environmental"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Environmental - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Shopera Pro -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/shopera-pro.jpg'; ?>" alt="<?php esc_html_e( 'Shopera Pro Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Shopera Pro', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Shopera Pro is clean, modern, responsive and highly customizable premium WooCommerce theme. It’s perfect for any kind of web shop. It looks great with all types of devices (laptops, tablets and mobiles).', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Shopera Pro' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Shopera Pro</span>
						<a href="https://cohhe.com/project-view/shopera-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Shopera Pro</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.cohhe.com/shopera/"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Shopera Pro - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Matte -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/matte.jpg'; ?>" alt="<?php esc_html_e( 'Matte Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Matte', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Matte is responsive WordPress blog theme with a clean design and modern look. Matte theme is really flexible and easy to use. It can be used for business, blog, personal, travel and many more. ', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Matte' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Matte</span>
						<a href="https://cohhe.com/project-view/matte/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Matte</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/matte/"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Matte - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

	</div>

	<div class="everal-tab-pane-half">

		<!-- Snaptube -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/snaptube.png'; ?>" alt="<?php esc_html_e( 'Snaptube Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Snaptube', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Snaptube is an advanced solution for Video hosting websites, Video portfolio and Magazine. It will help you get a professional video site up and running quickly, it is inspired by the popular websites: YouTube, Vimeo and Dribbble.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Snaptube' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Snaptube</span>
						<a href="https://cohhe.com/project-view/snaptube/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Snaptube</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=snaptube"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Snaptube - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Animal Care -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/animal_care.png'; ?>" alt="<?php esc_html_e( 'Animal Care Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Animal Care', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Animal Care theme ideal for nonprofits, charities, activists and political campaigns. It is a powerful, feature-rich theme that lets you customize a wide variety of features from the comfort of your Dashboard.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Animal Care' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Animal Care</span>
						<a href="https://cohhe.com/project-view/animal-care/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Animal Care</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=animalcare"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Animal Care - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Rive -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/rive.png'; ?>" alt="<?php esc_html_e( 'Rive Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Rive', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Rive theme is especially designed for charity, NGO, non-profit organization, donation, church or fundraising website. It is packed with amazing donation system and you only need to enter your PayPal address or Authorize.net API details to start using it!', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Rive' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Rive</span>
						<a href="https://cohhe.com/project-view/rive/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Rive</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/themes/?theme=rive"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Rive - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Everal Pro -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/everal-pro.png'; ?>" alt="<?php esc_html_e( 'Everal Pro Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Everal Pro', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Everal Pro is a premium WordPress blogging theme that is well suited for all kinds of blogs. It doesn\'t really matter if it is a travel blog or tech news, it will be a choice you will never regret.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Everal Pro' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Everal Pro</span>
						<a href="https://cohhe.com/project-view/everal-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Everal Pro</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/everal-pro"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Everal Pro - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Sky -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/sky.jpg'; ?>" alt="<?php esc_html_e( 'Sky Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Sky', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Sky is a beautiful, responsive, 3-in-1 WordPress listings theme. Its flexible design options make Sky perfect for listing Bed & Breakfast bookings, Vacation Packages, Estates, General Directories, and more.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Sky' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Sky</span>
						<a href="https://cohhe.com/project-view/sky/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Sky</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/sky"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Sky - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Longform Pro -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/longform-pro.jpg'; ?>" alt="<?php esc_html_e( 'Longform Pro Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Longform Pro', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'Enhance your story experience, by leveraging the power of Longform Pro Wordpress Theme, built especially for telling great stories.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Longform Pro' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Longform Pro</span>
						<a href="https://cohhe.com/project-view/longform-pro/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Longform Pro</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://demo.cohhe.com/longform/"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Longform Pro - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

		<hr class="bigger" />

		<!-- Zap Lite -->
		<div class="welcome-screen-child-theme-container">
			<div class="welcome-screen-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/zap-lite.png'; ?>" alt="<?php esc_html_e( 'Zap Lite Theme', 'everal' ); ?>" />
				<div class="welcome-screen-child-theme-description">
					<h2><?php esc_html_e( 'Zap Lite', 'everal' ); ?></h2>
					<p><?php esc_html_e( 'We can say with confidence that Zap Lite is the best free multipurpose WordPress theme. Designed to give a clean and fresh feel for your website, it puts most emphasis on the content.', 'everal' ); ?></p>
				</div>
			</div>
			<div class="welcome-screen-child-theme-details">
				<?php if ( 'Zap Lite' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Zap Lite</span>
						<a href="https://cohhe.com/project-view/zap-lite/" class="button button-primary install right"><?php printf( __( 'Get %s now', 'everal' ), '<span class="screen-reader-text">Zap Lite</span>' ); ?></a>
						<a class="button button-secondary preview right" target="_blank" href="http://cohhe.com/demo/zap/"><?php esc_html_e( 'Live Preview','everal'); ?></a>
						<div class="welcome-screen-clear"></div>
					</div>
				<?php } else { ?>
				<div class="theme-details active">
					<span class="theme-name"><?php echo esc_html_e( 'Zap Lite - Current theme', 'everal' ); ?></span>
					<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','everal'); ?></a>
					<div class="welcome-screen-clear"></div>
				</div>
				<?php } ?>
			</div>
		</div>

	</div>


	<div class="welcome-screen-clear"></div>

</div>
