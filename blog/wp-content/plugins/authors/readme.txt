=== Authors Widget ===
Contributors: flocsy
Donate link: http://blog.fleischer.hu/wordpress/authors/
Tags: authors, author, multi-author, multi-user, list, sidemenu, sidebar, links, widgets, widget, plugin, avatar, gravatar
Requires at least: 2.0.2
Tested up to: 3.0
Stable tag: trunk

Authors Widget shows the list or cloud of the authors in the sidemenu.

== Description ==

Authors Widget shows the list or cloud of the authors, with the number of posts, link to RSS feed next to their name, avatar. It is useful in a multi-author blog, where you want to have the list in the sidemenu.
The widget can also display an "Author Cloud" if [SEO Tag Cloud plugin](http://wordpress.org/extend/plugins/seo-tag-cloud/) is installed.

== Installation ==

To install Authors Widget follow the following steps:

1. Unpack `authors.zip` to `/wp-content/plugins/authors/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Presentation' or 'Design' or 'Appearance' menu
4. Go to 'Widgets' menu
5. Drag & Drop the Authors Widget to the place on your sidebar where you would like to display the authors' list

Optionally you can change the following settings:

1. Title
2. Format: list | cloud | dropdown
3. Order by: name | post count
4. Number of authors to show
5. Show Avatar
6. Avatar size
7. Show RSS links
8. Show post counts
9. Exclude admin
10. Hide credit
11. Save the changes

And you're welcome to [donate](http://blog.fleischer.hu/wordpress/authors/) to keep the plugin developed

== Frequently Asked Questions ==

= What languages Authors Widget is translated to? =

* English
* Hungarian / Magyar
* Russian / Русский by [Fat Cow](http://www.fatcow.com "Fat Cow")
* Spanish / Español by [Jos Velasco](http://cuanticawebs.com/ "Cuántica Webs")

= How can I exclude certain authors from being displayed? =

Add them to the Exclude list either by ID or user_login:

1,3,7

"admin","bob","joe"

== Screenshots ==

1. List style
2. Cloud style
3. List style with avatars
4. Dropdown style
5. Open the Appearance box in wp-admin and chose the Widgets menu
6. Drag Authors
7. Drop it to your Sidebar and set up the widget options
8. This is how it looks in older WP versions

== Changelog ==

= 2.0 =
* Added feature: Exclude authors by ID or "user_login"
* Fixed warning: load_plugin_textdomain

= 1.9.1 =
* Fixed bug: Number of authors to show in list, dropdown format

= 1.9 =
* Added feature: show full name
* Added: order by first_name, last_name

= 1.8 =
* Fixed bug: order by posts didn't work when doesn't show post count

= 1.7 =
* Added feature: show avatar
* Fixed bug: exclude_admin now should work also for admins that have ID > 1, with user_name <> 'admin'

= 1.6.1 =
* Fixed bug: format radio buttons didn't show when seo-tag-cloud widget wasn't installed

= 1.6 =
* Added format option to show authors in dropdown menu
* Fixed bug: args don't work when used without widget

= 1.5 =
* Added option to show only top N authors (only in cloud format)

= 1.4 =
* Added credit link

= 1.3 =
* Added Cloud format
* Added option to choose format: list | cloud
* Added option to order by: name | post count

= 1.2 =
* Added Russian translation

= 1.1 =

= 1.0 =

== Upgrade Notice ==

= 1.7 =
Added the long waited Avatar support.

= 2.0 =
Added the long waited Exclude by ID or user_login support
