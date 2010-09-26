<?php

function drt_offloc_after_theme_setup() {
    if ( ! is_admin() ) {
        wp_enqueue_script('jwplayer', get_bloginfo('stylesheet_directory') . '/jwplayer-5.3/jwplayer.js');
        wp_enqueue_script('jwplayer-html5', get_bloginfo('stylesheet_directory') . '/jwplayer-5.3/jwplayer.html5.js');
    }
}
add_action('after_setup_theme', 'drt_offloc_after_theme_setup');
