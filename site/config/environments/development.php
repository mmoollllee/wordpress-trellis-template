<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('WP_SCSS_ALWAYS_RECOMPILE', true);
Config::define('WP_CACHE', false);

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);

define('DISABLED_PLUGINS', serialize([
    'autoptimize/autoptimize.php',
    'wp-super-cache/wp-cache.php',
    'google-sitemap-generator/sitemap.php',
    'redirection/redirection.php',
    'simple-history/index.php',
    'wp-statistics/wp-statistics.php'
]));

define('ENABLED_PLUGINS', serialize([
    'wp-scss/wp-scss.php'
]));
