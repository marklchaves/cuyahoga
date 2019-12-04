# cuyohoga

### A Collection of WordPress Plugins

---

## Ko-fi Button Plugin

[Plugin Homepage on WordPress.org](https://wordpress.org/plugins/ko-fi-button/)

This version of the Ko-fi Button Plugin incorporates the [prototype code (below)](#prototype) with the official Ko-fi Button Plugin codebase. This means there is a new checkbox in the plugin settings page for inserting a _pretty_ content box for the Ko-fi button (linkbox). If the **Add to Posts** setting is checked, the _pretty_ linkbox is added to the bottom of every blog post (not pages or portfolios).

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
