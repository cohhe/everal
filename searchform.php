<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _e( 'Search for:', 'everal' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x(  __( 'Search...', 'everal' ), 'placeholder', 'everal' ); ?>" value="<?php echo get_search_query( __( 'Search...', 'everal' ) ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'everal' ); ?>" />
	</label>
	<input type="hidden" name="lang" value="<?php echo(ICL_LANGUAGE_CODE); ?>"/>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'everal' ); ?>" />
</form>