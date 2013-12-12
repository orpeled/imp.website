=== Pop! Popular Posts for WordPress ===
Contributors: JuanJedi, codigonexo
Donate link: http://www.codigonexo.com/thanks
Tags: Popular, Posts, Popular Posts, Custom Post Types, Popular Custom Post Types, codigonexo, juanjedi
Requires at least: 3.5
Tested up to: 3.5.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays in a Widget your most visited Posts. It also works with Pages, and Custom Post Types.

== Description ==

Pop! Popular Posts for WordPress provides you a way to show your most visited posts, pages, or custom types, using a Widget.

Every time that one visitor loads a post, your database will update the count for that post +1. That information can be shown within a Widget, that allows you to set how many entries do you want to show in the list, the post type to show, and show or hide the views count.

If you are a developer, and want to recover the popular posts into your theme/plugin, you can use the function "pop_get_popular_posts($num,$type,$order)", where $num is the number of posts you want (default: 5), $type is the post type (default: post), and $order can be "DESC" for a descendant list, or "ASC" for an ascendant list. This function returns an Array of WP_Post Objects.

Translations available:

* English (en_US)
* Spanish (es_ES)

== Installation ==

1. Upload the directory to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently asked questions ==

= How it works? =

The plugin saves the view data into the postmeta table in your WordPress database, under "pop_post_views" meta key.

= I'm a theme designer or a plugin developer, how can I retrieve popular posts? =

You can use the function "pop_get_popular_posts($num,$type,$order)", where $num is the number of posts you want (default: 5), $type is the post type (default: post), and $order can be "DESC" for a descendant list, or "ASC" for an ascendant list. This function returns an Array of WP_Post Objects, not a list.

With the WP_Post Objects, you can use the usual WordPress functions to retrieve information about the Post.

= Can I set more than one Widget in my sidebar? = 

Of course you can. You can set one Widget for Posts, another one for Pages, and many as you want for Custom Post Types, for example.

== Screenshots ==

1. The Widget Form
2. Popular Posts list.

== Changelog ==

= 1.2 - 22/04/2013 =

* More options added to the widget! Now you can show the post thumbnail and the excerpt field (if is blank, it will show some words from the content).

= 1.1 - 11/03/2013 =

* Bugs fixed (Thanks to pubwvj!)

= 1.0 - 08/03/2013 =

* First version. Basic functionality created.