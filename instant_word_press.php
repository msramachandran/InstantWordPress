<?php
/**
 * Plugin Name: Instant Word Press
 * Plugin URI: https://github.com/msramachandran/InstantWordPress/blob/master/README.md
 * Description: A plugin to integrate instant click onto wordpress
 * Version: 0.1
 * Author: Ramachandran M S
 * Author URI: https://github.com/msramachandran
 * License: GPL V3
 */

add_action('init', 'init_instantclick');

function init_instantclick() {
    wp_register_script('instant_click', plugins_url('instantclick.js', __FILE__));
    wp_register_script('instant_word_press', plugins_url('instant_word_press.js', __FILE__));
    wp_enqueue_script('jquery');
    wp_enqueue_script('instant_click');
    wp_enqueue_script('instant_word_press');

    wp_register_style('instant_word_press_css', plugins_url('instant_word_press.css', __FILE__));
    wp_enqueue_style('instant_word_press_css');
}

?>
