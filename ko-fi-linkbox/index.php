<?php 
 
/*
Plugin Name: Tuts Formatting
Plugin URI: http://net.tutsplus.com
Description: Saves me time.
Version: 1.0
Author: Jeffrey Way
Author URI: http://net.tutsplus.com
*/

/**
 * For the Tuts_Formatting Plugin Tutorial
 *
 * https://code.tutsplus.com/articles/a-crash-course-in-wordpress-plugin-development--net-4598
 */
function Tut_Formatting($content) {
    $end_of_tut = <<<EOT
    <div class="webroundup-wrapper">
    <div class="webroundup">
        <div>Follow us on <a href="http://www.twitter.com/nettuts">Twitter</a>, or subscribe to the <a href="http://feeds.feedburner.com/nettuts" title="NETTUTS RSS Feed">NETTUTS RSS Feed</a> for more daily web development tuts and articles.</div>
    </div> 
    </div>
    EOT;
    /* There's a bug in here that messes up the closing post content tag. ~mlc 29 November 2019
    $match = preg_match_all('/<div class=[\'"]?tutorial_image[\'"]?>\s*<img src=[\'"]?.+\.(jpg|gif|jpeg|png)[\'"]?(\s.+)?[(\s\/>)|(>)]\s*<\/div>/i', $content, $matches);
    if(!$match) {
        $theContent = preg_replace('/<img src=[\'"]?.+\.(jpg|gif|jpeg|png)[\'"]?(\s.+)?[(\s\/>)|(>)]/', '<div class="tutorial_image">$0</div>', $content);
    } else {
        $theContent = $content;
    }
    */
    $theContent = $content;

    $theContent = preg_replace('/<h2>/', '<h3>', $theContent);
    $theContent = preg_replace('/<\/h2>/', '</h3>', $theContent);
    return (is_single()) ? $theContent . $end_of_tut : $theContent;
}
add_filter('the_content', 'Tut_Formatting');