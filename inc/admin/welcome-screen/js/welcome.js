jQuery(document).ready(function() {
	
	/* If there are required actions, add an icon with the number of required actions in the About everal page -> Actions required tab */
    var everal_nr_actions_required = everalWelcomeScreenObject.nr_actions_required;

    if ( (typeof everal_nr_actions_required !== 'undefined') && (everal_nr_actions_required != '0') ) {
        jQuery('li.welcome-screen-w-red-tab a').append('<span class="welcome-screen-actions-count">' + everal_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".everal-dismiss-required-action").click(function(){

        var id= jQuery(this).attr('id');
        jQuery.ajax({
            type       : "GET",
            data       : { action: 'everal_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : everalWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.welcome-screen-tab-pane#actions_required h1').append('<div id="temp_load" style="text-align:center"><img src="' + everalWelcomeScreenObject.template_directory + '/inc/admin/welcome-screen/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var everal_actions_count = jQuery('.welcome-screen-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof everal_actions_count !== 'undefined' ) {
                    if( everal_actions_count == '1' ) {
                        jQuery('.welcome-screen-actions-count').remove();
                        jQuery('.welcome-screen-tab-pane#actions_required').append('<p>' + everalWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.welcome-screen-actions-count').text(parseInt(everal_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });
	
	/* Tabs in welcome page */
	function everal_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".welcome-screen-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}
	
	var everal_actions_anchor = location.hash;
	
	if( (typeof everal_actions_anchor !== 'undefined') && (everal_actions_anchor != '') ) {
		everal_welcome_page_tabs('a[href="'+ everal_actions_anchor +'"]');
	}
	
    jQuery(".welcome-screen-nav-tabs a").click(function(event) {
        event.preventDefault();
		everal_welcome_page_tabs(this);
    });

});