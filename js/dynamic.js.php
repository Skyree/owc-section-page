<?php
header('Content-type: text/javascript');
?>
jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.owc_section_page_plugin', {
        init : function(ed, url) {
            ed.addCommand('owc_section_page_insert_slideblock', function() {
				selected = tinyMCE.activeEditor.selection.getContent();

				if( selected ){
					content =  '[section=TITLE HERE]'+selected+'[endsection]';
				} else {
					content =  '[section=TITLE HERE][endsection]';
				}

				tinymce.execCommand('mceInsertContent', false, content);
			});

            ed.addButton('owc_section_page_button', {title : 'Insert slide block', cmd : 'owc_section_page_insert_slideblock', image: url + '/../images/icon-list.gif' });
        },   
    });

    tinymce.PluginManager.add('owc_section_page_button', tinymce.plugins.owc_section_page_plugin);
});