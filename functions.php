<?php
/**
 * This file adds custom functions and definitions to the Aegis Child Theme.
 * 
 * Purpose of a Child Theme's functions.php:
 *
 * The functions.php file of a child theme allows developers to modify or extend the functionality
 * of the parent theme without directly modifying its files. It provides a way to add custom functions,
 * modify existing functions, enqueue styles and scripts, and perform other actions specific to the child theme.
 *
 * By using a child theme, you can safely update the parent theme without losing any customizations made
 * in the child theme's functions.php file. It helps maintain a separation between the parent and child themes,
 * making it easier to manage updates and customize the appearance and behavior of the theme.
 *
 * For more information on child themes, refer to the official WordPress documentation:
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * @package aegis
 * @author  Atmostfear Entertainment
 * @license GNU General Public License v2 or later
 * @link    https://github.com/atmostfear-entertainment/aegis-child
 * @since   1.0.0
 */

// This is the 'aegis_child_styles' function.
function aegis_child_styles() {
    // This line enqueues a style with the handle 'aegis-child-style'.
    // It uses the 'get_stylesheet_uri()' function to get the URI of the child theme's style.css file.
    wp_enqueue_style( 'aegis-child-style', get_stylesheet_uri() );
}

// This code hooks the 'aegis_child_styles' function to the 'wp_enqueue_scripts' action.
add_action( 'wp_enqueue_scripts', 'aegis_child_styles' );

/**
 * Add your custom PHP code below this comment.
 * Only make edits to this file if you have direct access to it on your server, such as to fix errors if they occur.
 */