=== Section Page ===
Contributors: Skyree
Donate link: 
Tags: content, shortcode, section
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin allowing you to insert dropdown sections in your wordpress pages and posts.

== Description ==

Section Page a simple plugin allowing you to insert dropdown sections in your wordpress pages and posts.

= Prerequisite =

This plugin loads wordpress jQuery.


= Installation =

Save the plugin into your wordpress plugin folder and activate it in the admin.

= Options =
* HTML tag for section title : Can be `h1` `h2` (by default) `h3` `h4` `span` `strong` `em` `p`
* HTML classes for section : Additional html classes for each sections (optionnal)
* HTML classes for section title : Addtional html classes for each sections title (optionnal)
* HTML classes for section content : Additional html classes for each sections content (optionnal)
* Use a char before section title : Add or not html chars at the left of each sections title
* Char when section is closed : Char when a section is closed (default : `&#9658` )
* Char when section is open : Char when a section is open (default : `&#9660` )

= Usage =

The plugin add a "Add dropdown section" button to your tinymce editor.  
Select your block of text and click the button to wrap the text into a section shortcode.

```
	[section=Title of my section]
	Your content
	...
	[endsection]
```
This will be automatically replaced by a dropdown section based on the plugin settings.

= Customization =

If you are using wordpress on your ftp, customize your sections css using the classes options.

== Installation ==

1. Upload the folder `owc-section-page` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Screenshots ==

1. This screenshot description corresponds to `assets/screenshot-1.jpg`. This is the plugin option panel; available in settings menu.
2. This screenshot description corresponds to `assets/screenshot-2.jpg`. This is the tinymce button added by the plugin and the shortcode generated.
3. This screenshot description corresponds to `assets/screenshot-3.jpg`. This is how your content will look with the plugin activated and shortcodes placed.