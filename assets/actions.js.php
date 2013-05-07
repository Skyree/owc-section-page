<?php
header('Content-type: text/javascript');
?>
jQuery(document).ready(function() {
	jQuery('.owc-section-page .owc-sp-open').on('click', function() {
		if(jQuery(this).next('.owc-sp-content').css('display') == 'none') {
			if(typeof(owc_sp_use_char) != 'undefined') jQuery(this).find('.owc-sp-toggle-arrow').html(jQuery(this).parent().attr('data-down'));
			jQuery(this).next('.owc-sp-content').slideToggle();
		}
		else {
			if(typeof(owc_sp_use_char) != 'undefined') jQuery(this).find('.owc-sp-toggle-arrow').html(jQuery(this).parent().attr('data-up'));
			jQuery(this).next('.owc-sp-content').slideToggle();
		}
	});
});