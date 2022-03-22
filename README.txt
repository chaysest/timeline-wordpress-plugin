=== Plugin Name ===
Contributors: @chaysest
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin is made to generate a shortcode for a project timeline in WordPress

Wordpress Boilerplate from: https://wppb.me/

== Installation & Usage ==


1. Make sure you have Advanced Custom Fields installed
1. Upload `proj-prog.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. For any post types that may have a timeline, add a field with type: "Select". This field must have key:value choices in the "Choices" section of the field.
   The key must be a valid css class. The value should be the Label for each step of progression.
1. The field's name should be placed as a string into the get_field_object() function call in the file class-proj-prog-public.php
1. Use the shortcode [timeline] to add the shortcode to any page/post.
1. Change any styling in proj-prog-public.css

== Changelog ==

= 1.0 =
* Version 1.0. Working timeline.
