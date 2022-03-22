=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://www.rainroomcreative.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin is made to generate a shortcode for a project timeline.

== Description ==

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wp.org/wp-plugins.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

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



== Upgrade Notice ==

= none =
