// Admin Javascript
jQuery( document ).ready( function( $ ) {

	// Choose layout
	$("#vh_layouts img").click(function() {
		$(this).parent().parent().find(".selected").removeClass("selected");
		$(this).addClass("selected");
	});

	jQuery(document).on('click', '.everal-rating-dismiss', function() {
		jQuery.ajax({
			type: 'POST',
			url: ajaxurl,
			data: { 
				'action': 'everal_dismiss_notice'
			},
			success: function(data) {
				jQuery('.everal-rating-notice').remove();
			}
		});
	});
});