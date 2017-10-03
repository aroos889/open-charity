<?php


/**
 * Implementation of preprocess_page().
 */
function open_charity_js_alter(&$javascript) {
    $javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'open_charity') .
    '/js/jquery-1.8.0.min.js';
    $javascript['misc/jquery.js']['version'] = '1.8.0';
}