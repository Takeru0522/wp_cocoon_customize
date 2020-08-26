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
define('AUTH_KEY',         'Lo41Etd+/zrv6e2QSwZxWpKMXrtPL+DGrCNItfBQMGVMYY2QF5NLzn7st+1w+kkb3WPO4TDYjDroL8Z2SYjMTw==');
define('SECURE_AUTH_KEY',  'HItxRFILgHrVAs5xbMch9re1PCrFo9Qk1PbPzVe4R0BLw40f+TiqRPA2qKlxPxOUqPAKYd1BEYahspfQqcW7SQ==');
define('LOGGED_IN_KEY',    '0Ck94GmYfaUHhlhWjRjxRIhhVNG+yOlHPgp/7BHbgzlWEQyYM333fty34ygS6/+P+vux6VhQh2Ep03l2lzxYfw==');
define('NONCE_KEY',        '4dzOl63ElKM8vQSfB28rVXCbKS0/ZKsvQIqm4SEye8dP4EjNLdSdGdlYQ1+sD0K8dvD8hGFPGEKxrMNoDmZ6vA==');
define('AUTH_SALT',        'h17v1jddmSLOWAiccQ52dQ7b+GULw7GcElYb6rS8WDo9DKOVDXHf/vOvqtp0Buou+OIOtVnhyJhlxMsPGmsXwQ==');
define('SECURE_AUTH_SALT', 'Y/QEz59frOVLk3s6EgPTMjK/di1FnUXBSL7CNVg8Q78X1hldpvnSqYZ4KZfRTNyY6e7Vrfxi5mEPbNN56QizEw==');
define('LOGGED_IN_SALT',   'O/fORMu1j/5odbR8LQlF+VBm8+vCk+buYO7dVqOgfgEowc1voF+gIOTiSjSSPoE5EB2GePT06FesCa4mwa9Bow==');
define('NONCE_SALT',       '9+69sivBbs1nFls6d7VDbaV/WG/YqNdpxm9UUci7KdS+5Hf+NEpnYvbagZrnfsEEEplRR0Ex6tg3r0LBknR8HQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
