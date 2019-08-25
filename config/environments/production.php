<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

define('DISABLED_PLUGINS', false );

define('ENABLED_PLUGINS', serialize([
    'autoptimize/autoptimize.php',
    'wp-super-cache/wp-cache.php',
    'google-sitemap-generator/sitemap.php',
    'redirection/redirection.php',
    'simple-history/index.php',
    'wp-statistics/wp-statistics.php'
]));
