<?php
/*
Plugin Name: The P Tag Remover
Description: This plugin removes unnecessary <p> tags surrounding images, embeds, and anchor tags enclosing images within post content, addressing the automatic insertion by WordPress's wpautop function. It's designed to clean up your HTML output, preventing layout issues caused by these extraneous <p> tags added by WordPress's auto-formatting.
Version: 1.0
Author: David Bickley
Author URI: http://davidbickley.com/
*/

function filter_ptags_on_images($content)
{
    // This regular expression identifies and targets <p> tags encapsulating <img> tags,
    // [embed] shortcodes, or <a> tags that enclose <img> tags, within post content.
    // The pattern seeks out:
    // 1. An opening <p> tag possibly followed by whitespace.
    // 2. An image tag (<img>), an [embed] shortcode, or an anchor (<a>) tag containing an <img> tag,
    //    all potentially followed by corresponding closing tags or additional text.
    // 3. Any trailing whitespace and a closing </p> tag.
    // The function then replaces this entire structure with just the inner content (image, embed, or anchor),
    // effectively eliminating the surrounding <p> tags without disrupting the intended media embedding.
    $pattern = '/<p>(\s*)((<a .*?>)?<img .*?\/>(<\/a>)?|\\[embed].*?\\[\/embed])(\s*)<\/p>/is';

    // Replace the identified patterns, removing the <p> tags while preserving the core content.
    return preg_replace($pattern, '\2', $content);
}

// Hook the function to run after WordPress applies its content filters, ensuring it addresses
// only the final output and maintains compatibility with other plugins and themes.
add_filter('the_content', 'filter_ptags_on_images');
