# cuyohoga

### A Collection of WordPress Plugins

---

## Ko-fi Button Plugin

[Plugin Homepage on WordPress.org](https://wordpress.org/plugins/ko-fi-button/)

This version of the Ko-fi Button Plugin incorporates the [prototype code (below)](#prototype) with the official Ko-fi Button Plugin codebase. This means there is a new checkbox in the plugin settings page for inserting a _pretty_ content box for the Ko-fi button (linkbox). If the **Add to Posts** setting is checked, the _pretty_ linkbox is added to the bottom of every blog post (not pages or portfolios).

### Status

The official plugin looks like it hasn't been touched in over a year (14 months). I'd like to revive it wit the new **Add to Posts** feature.

I developed the **Add to Posts** code on 4 December 2019. I posted a notice on [the plugin forum](https://wordpress.org/support/topic/dev-code-branch-for-adding-button-to-posts/) shortly after. So far, no replies. Please keep an eye on this README or on the forum for updates. Thanks!

### Screen Captures

![Plugin Settings Page](/assets/ko-fi-button-plugin-add-to-posts-setting-1280w.jpg "Plugin Settings")

![Result](/assets/ko-fi-button-plugin-posts-linkbox-588w.jpg "Result")

---

## Ko-fi Linkbox Prototype <a name="prototype" id="prototype"></a>

This WordPress plugin is a proof of concept. When activated, it displays at the bottom of all **posts** a _pretty_ content box with the Ko-fi "button" linked to a Ko-fi page. All information details are hardcoded in the PHP. There is no wp-admin settings page interface.

---

## Log Error

Allows writing debug statements to the WordPress **debug.log** file.

### Usage

`write_log( "Here's the linkbox {$linkbox}" );`

---

<a href='https://ko-fi.com/D1D7YARD' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://az743702.vo.msecnd.net/cdn/kofi5.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
