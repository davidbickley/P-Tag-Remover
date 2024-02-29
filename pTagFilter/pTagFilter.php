<?php
/*
Plugin Name: The P Tag Remover
Description: This plugin removes unnecessary <p> tags surrounding images, embeds, and anchor tags enclosing images within post content, addressing the automatic insertion by WordPress's wpautop function. It's designed to clean up your HTML output, preventing layout issues caused by these extraneous <p> tags added by WordPress's auto-formatting.
Version: 1.1
Author: David Bickley
Author URI: http://davidbickley.com/
*/

function filter_ptags($content)
{
    // Improved regular expression to handle different quotes and attributes efficiently.
    // This pattern aims to be more inclusive of various HTML scenarios:
    // 1. Supports both single and double quotes within tags.
    // 2. Accounts for additional attributes inside the <img> and <a> tags.
    // 3. Ensures non-greedy matching to prevent overreaching matches that could include unintended content.
    $pattern = '/<p>(\s*)((<a\s+[^>]*>)?<img\s+[^>]*\/>(<\/a>)?|\\[embed].*?\\[\/embed])(\s*)<\/p>/is';

    // Replace the identified patterns, removing the <p> tags while preserving the core content.
    return preg_replace($pattern, '\2', $content);
}

// Hook the function to run after WordPress applies its content filters, ensuring it addresses
// only the final output and maintains compatibility with other plugins and themes.
add_filter('the_content', 'filter_ptags');
