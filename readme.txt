=== WP UGC Comments ===
Contributors: timvaniersel
Donate link: https://timvaniersel.com/en/plugins/wp-ugc-comments/
Tags: comments, SEO, UGC
Requires at least: 4.9
Tested up to: 5.2
Stable tag: 1.00

Adds the "ugc" value to the rel attribute for all links in comments and the author URLs.

== Description ==

Adds the rel="ugc" attribute value to links in comments and author URLs. This way the search engines will know that the links in the are added by users (User Generated Content).

Currently the plugins adds the value ugc after the nofollow value. Not all SEO tools and search engines are up-to-date and actively supporting the new attribute values.

This plugin won't get further updates as WordPress 5.3 has the exact same attribute values implemented (nofollow, ugc).


== Installation ==

1. Copy all the files into the "wp-content/plugins/wp-ugc-comments/" directory.
2. Activate the plugin in the WordPress Plugin Admin panel.


== Frequently Asked Questions ==

= Does it only works with Links in Comments? =

Links in Comments and Comment Author links are processed with rel="nofollow ugc" tag.

= Why does the plugin still show the nofollow before the ugc? =

Currently the plugins adds the value ugc after the nofollow value. Not all SEO tools and search engines are up-to-date and actively supporting the new attribute values.
