<?php 
 
/*
Plugin Name: Ko-fi Linkbox
Plugin URI: https://caughtmyeye.dev
Description: Adds a pretty Ko-fi link box to the bottom of all WordPress blog posts.
Version: 1.0
Author: mark l chaves
Author URI: https://caughtmyeye.dev
*/

/**
 * TBD
 */
function kofi_linkbox($content) {
    $linkbox = <<<EOT
    <div style="overflow:hidden;border-radius:5px 5px 5px 5px;box-shadow: 3px 2px 3px 5px;padding: 2% 2% 2% 2%;background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;border-radius:5px 5px 5px 5px;" data-bg-url="">
    <div>
        <h3 style="text-align: center;">
            Questions or Comments?
        </h3>
    </div>
    <div>
        <p style="text-align: center;">
            If something isn’t clear or if I missed something, please leave me a comment below.
        </p>
    </div>
    <div style="text-align: center; display: flex; justify-content: center;"> 
        <a href="https://ko-fi.com/D1D7YARD" target="_blank">
            <img style="border:0px;height:45px;" src="https://az743702.vo.msecnd.net/cdn/kofi5.png?v=2" alt="Buy Me a Coffee at ko-fi.com" height="45" border="0" align="middle"></a>
        </div>
    </div>
    </div>
    EOT;
    
    // write_log( "Here's the linkbox {$linkbox}" );

    $theContent = $content;

    return (is_single()) ? $theContent . $linkbox : $theContent;
}
add_filter('the_content', 'kofi_linkbox');