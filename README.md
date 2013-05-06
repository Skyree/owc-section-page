Section Page Plugin for Wordpress
=================================

OWC Section Page is a simple Wordpress plugin allowing you to divide your posts into dropdown sections.  
No more pages as long as [Longcat](http://longc.at/longcat).

## Prerequisite
jQuery


## Installation
Save the plugin into your wordpress plugin folder and activate it in the admin.

## Options
* HTML tag for section title : Can be `h1` `h2` (by default) `h3` `h4` `span` `strong` `em` `p`
* HTML classes for section : Additional html classes for each sections (optionnal)
* HTML classes for section title : Addtional html classes for each sections title (optionnal)
* HTML classes for section content : Additional html classes for each sections content (optionnal)
* Use a char before section title : Add or not html chars at the left of each sections title
* Char when section is closed : Char when a section is closed (default : `&#9658` )
* Char when section is open : Char when a section is open (default : `&#9660` )

## Usage
The plugin add a "Add dropdown section" button to your tinymce editor.  
Select your block of text and click the button to wrap the text into a section shortcode.

	[section=Title of my section]
	Your content
	...
	[endsection]

This will be automatically replaced by a dropdown section based on the plugin settings.

## Customization
If you are using wordpress on your ftp, customize your sections css with the classes options.