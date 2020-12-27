=== Starter Plugin ===
Contributors: arunbasillal,waptug
Donate link: http://millionclues.com/donate/
Tags: plr,importer,WordPress,plugin
Requires at least: 2.0
Tested up to: 4.8.1
Requires PHP: 5.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

REMOVE ME: Validate using: https://wordpress.org/plugins/about/validator/

GeekZoneArticleImporter - PLR Article importer for WordPress. Flatfile importer for plr articles
== Description ==

This plugin will allow you to import flatfile text articles from standard (PLR)Private Lable Reseller article directories
availbale form Leadspidea.com.


Article format must follow this pattern to be parsed correctly:

Format for all articles must have the following sections with the section heading maintaining exact capitilization with section content directly following the heading line.

Here is a sample file
=====================
Title: 
3 Benefits To Owning A Refurbished Laptop

Word Count:
434

Summary:
If you like having the latest and greatest, then refurbished is not for you. However, if you don't mind minor cosmetic damage, and the fact that someone else has used your laptop, then you may want to consider purchasing a refurbished laptop. But why would anyone want to purchase a refurbished laptop as opposed to a brand new one? In this article, I will tackle this very issue, and give 3 reasons why you should own a refurbished laptop.


Keywords:
refurbished laptop, refurbished laptops


Article Body:
Copyright 2006 the Tech Boy

If you like having the latest and greatest, then refurbished is not for you. However, if you don't mind minor cosmetic damage, and the fact that someone else has used your laptop, then you may want to consider purchasing a refurbished laptop. But why would anyone want to purchase a refurbished laptop as opposed to a brand new one? In this article, I will tackle this very issue, and give 3 reasons why you should own a refurbished laptop.

The first reason why purchasing a refurbished laptop may be a good idea is that they are a lot less expensive than their newer cousins. Of course, refurbished implies that it has seen prior usage, so refurbished laptops are generally older models, and you don't always know how their previous owners took care of them. But refurbished also implies that someone has taken the time to fix, and often times replace, any broken components. Do some research and only buy from reputable sources.

The second reason why you may want to purchase a refurbished laptop is that, because of their low cost, they are more expendable than new models, and make a great second laptop. As I explained above, refurbished laptops are generally a lot cheaper than a new laptop so if something should happen to it, you're only out maybe a few hundreds dollars as opposed to a new laptop which could cost you thousands.

The third reason why you may want to consider purchasing a refurbished laptop is that since you'll be spending a lot less money on the computer itself, you can afford to spend more upgrading it with newer, and better components. For example, you can add memory to speed it up, or upgrade to a larger hard drive. You should, of course, make sure that your computer can support these upgrades before you even purchase it. If it can't, then look for one that can before making your final decision.

If you decide to purchase your first refurbished laptop, make sure you do plenty of research. Refurbished means used, and you don't kow how the previous owner took care of it. Buy from a reputable source that offers some sort of warranty. Most won't warranty the battery or software but will provide at least a 30 day warranty for most of the hardware.

I've discussed three benefits to owning a refurbished laptop. They are low in cost, make a great second laptop, and you can spend more on upgrading the components.  Make sure to do your research before you buy, and owning one will be a pleasant experience.


===============End of File This line is not needed just have the last line of the article be the last line of the file ==============================

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wordpress.org usernames
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

== Installation ==

To install this plugin:

1. Install the plugin through the WordPress admin interface, or upload the plugin folder to /wp-content/plugins/ using ftp.
2. Activate the plugin through the 'Plugins' screen in WordPress. On a Multisite you can either network activate it or let users activate it individually. 
3. Go to WordPress Admin > Settings > 


== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Date: 
* First release of the plugin.

== Upgrade Notice ==

= 1.0 =
* First release of the plugin.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`