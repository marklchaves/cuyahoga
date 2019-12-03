<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jlP7p2dSBxnB83lu5Dp8MHBzCIgokVk/W6UdhqQ5ere+I3kscsdCkchz6ik+IqSAqALY1O0ntkgNz24ykor4wA==');
define('SECURE_AUTH_KEY',  'HGXJ13vxAj/a2MjVBivwjhIr3FVo69oCm8w2qWM1OGfS7gsmzpdZ7zHLQxRgkCyhca3P0pcp4k/kzibOGbls9Q==');
define('LOGGED_IN_KEY',    'XrCR2fh6S+GIZbI50jn0BET2Krri8Vg9q9uZjeaGK30vtci+IZFl4xDZs41/zx/1TWDWHCrfuZdf23oLCWlgfA==');
define('NONCE_KEY',        'jnCvLkvBNGRyAMXE/1OH0Xpoyr3sDaAca28+VXMe3xv73WIS2JQ3I8FgQNsPsAA0/IAkR8BXc/Yn10kE+9b3HQ==');
define('AUTH_SALT',        'TkpAmqaXjrFjH8yK+TILz3dTkvd1KBNsUZMIUXRu8rbbuPSBRpptjeE4P0SSAkrBqL8/6VAryTlsgILZm4lUtw==');
define('SECURE_AUTH_SALT', '9Uax/rKsW2uY+5ASxjTWmPQ7MILEs1DmdmR6XoN3ArToMOXpUoqyQwZcwUkVTq2DlclvonoQhSBjf3YsioSi7w==');
define('LOGGED_IN_SALT',   '4xy2UiMMYp6+b7ecbrM3HYRF/EppODqi+OX2LFvE3l7Ks9JJ/MqHm864ze43dVefmjaaEhzGR1NQSn28qbjxNw==');
define('NONCE_SALT',       'QZzhwmfOkWd3el+cCg/Ej1HQEOYSm23HWqwzJOVyzlyDqL6yuyxpQ6SKUV61p+OyootpUa9AKB23QGj9g873tg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * DEBUG
 */
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
