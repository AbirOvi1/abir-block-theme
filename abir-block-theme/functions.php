<?php
/**
 * Functions for Abir Block Theme
 */

// Add basic theme supports for block themes
function abir_block_theme_setup() {
    // Support for full site editing templates
    add_theme_support( 'block-templates' );

    // Support editor styles and block styles
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );

    // Optional: support wide alignments
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'abir_block_theme_setup' );

// Enqueue front-end stylesheet (style.css will be loaded automatically by WP for themes,
// but explicit enqueue can be useful if you add additional assets later).
function abir_block_theme_scripts() {
    wp_enqueue_style( 'abir-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'abir_block_theme_scripts' );
