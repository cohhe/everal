<?php
/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', 'everal_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function everal_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $everal_settings = array(
	'contextual_help' => array(
	  'content'       => array( 
		array(
		  'id'        => 'general_help',
		  'title'     => 'General',
		  'content'   => '<p>Help content goes here!</p>'
		)
	  ),
	  'sidebar'       => '<p>Sidebar content goes here!</p>',
	),
	'sections'        => array(
	  array(
		'id'          => 'general',
		'title'       => 'General'
	  ),
	  array(
		'id'          => 'fonts',
		'title'       => 'Fonts'
	  )
	),
	'settings'        => array(
		array(
			'id'           => 'website_logo',
			'label'        => __( 'Website logo', 'everal' ),
			'desc'         => sprintf( __( 'Please upload your logo.', 'everal' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'everal' ) ), 'FTP' ),
			'std'          => '',
			'type'         => 'upload',
			'section'      => 'general',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and'
		),
		array(
			'id'          => 'copyright_text',
			'label'       => __( 'Copyright', 'everal' ),
			'desc'        => __( 'Please provide short copyright text which will be shown in footer.', 'everal' ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'general',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		),
		array(
			'id'           => 'show__scroll_to_top__button',
			'label'        => __( 'Show "Scroll to Top" button', 'everal' ),
			'desc'         => __( 'Do you want to show "Scroll to Top" button?', 'everal' ),
			'std'          => 'false',
			'type'         => 'checkbox',
			'section'      => 'general',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and',
			'choices'      => array( 
				array(
					'value' => 'true',
					'label' => __( 'Show', 'everal' ),
					'src'   => ''
				)
			)
		),
		array(
			'id'           => 'favicon',
			'label'        => __( 'Favicon', 'everal' ),
			'desc'         => sprintf( __( 'Do you have favicon?', 'everal' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'everal' ) ), 'FTP' ),
			'std'          => '',
			'type'         => 'upload',
			'section'      => 'general',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and'
		),
		array(
			'id'          => 'everal_layout_style',
			'label'       => 'Layout',
			'desc'        => 'Choose a layout for your theme',
			'std'         => 'full',
			'type'        => 'radio-image',
			'section'     => 'general',
			'class'       => '',
			'choices'     => array(
				array(
					'value'   => 'left',
					'label'   => 'Left Sidebar',
					'src'     => OT_URL . '/assets/images/layout/left-sidebar.png'
				),
				array(
					'value'   => 'full',
					'label'   => 'Full Width (no sidebar)',
					'src'     => OT_URL . '/assets/images/layout/full-width.png'
				),
				array(
					'value'   => 'right',
					'label'   => 'Right Sidebar',
					'src'     => OT_URL . '/assets/images/layout/right-sidebar.png'
				)
			)
		),
		array(
			'id'           => 'google_font_roboto',
			'label'        => __( 'Roboto font', 'everal' ),
			'desc'         => __( 'If there are characters in your language that are not supported by Roboto, disable this option.', 'everal' ),
			'std'          => 'on',
			'type'         => 'on-off',
			'section'      => 'fonts',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and',
			'choices'      => array( 
				array(
					'value' => 'off',
					'label' => __( 'Disable', 'everal' ),
					'src'   => ''
				)
			)
		),
		array(
			'id'           => 'google_font_roboto_slab',
			'label'        => __( 'Roboto Slab font', 'everal' ),
			'desc'         => __( 'If there are characters in your language that are not supported by Roboto Slab, disable this option.', 'everal' ),
			'std'          => 'on',
			'type'         => 'on-off',
			'section'      => 'fonts',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and',
			'choices'      => array( 
				array(
					'value' => 'off',
					'label' => __( 'Disable', 'everal' ),
					'src'   => ''
				)
			)
		),
		array(
			'id'           => 'google_font_open_sans',
			'label'        => __( 'Open Sans font', 'everal' ),
			'desc'         => __( 'If there are characters in your language that are not supported by Open Sans, disable this option.', 'everal' ),
			'std'          => 'on',
			'type'         => 'on-off',
			'section'      => 'fonts',
			'rows'         => '',
			'post_type'    => '',
			'taxonomy'     => '',
			'min_max_step' => '',
			'class'        => '',
			'condition'    => '',
			'operator'     => 'and',
			'choices'      => array( 
				array(
					'value' => 'off',
					'label' => __( 'Disable', 'everal' ),
					'src'   => ''
				)
			)
		)
	)
  );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $everal_settings ) {
	update_option( 'option_tree_settings', $everal_settings ); 
  }
  
}