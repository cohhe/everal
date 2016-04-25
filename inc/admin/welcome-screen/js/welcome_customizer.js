jQuery(document).ready(function() {
    var everal_aboutpage = everalWelcomeScreenCustomizerObject.aboutpage;
    var everal_nr_actions_required = everalWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof everal_aboutpage !== 'undefined') && (typeof everal_nr_actions_required !== 'undefined') && (everal_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + everal_aboutpage + '"><span class="welcome-screen-actions-count">' + everal_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".everal-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section everal-upsells">');
    }
    if (typeof everal_aboutpage !== 'undefined') {
        jQuery('.everal-upsells').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="' + everal_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', everalWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".everal-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});