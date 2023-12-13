<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rectubmx_wp812' );

/** Database username */
define( 'DB_USER', 'rectubmx_wp812' );

/** Database password */
define( 'DB_PASSWORD', ']t2-7q6S4p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7unncgn9svkixktsvstw2cnrbih6m01frkn5cdkq8jfly94rq6ucoyq8lyds6k12' );
define( 'SECURE_AUTH_KEY',  'py9f1myoea6zxfzuqcf5ciktigrpc26vn9fvsatz3hsasrhnlv4i4vnietaridbf' );
define( 'LOGGED_IN_KEY',    'dklifeljrrxqmaa2etbqkb5lcq2lcxflecifgqf82sktwrgtlubizqigbso0g4ta' );
define( 'NONCE_KEY',        'dfwmnjx8u01ph3fwuvsb4ifkqe8iikxbhmup3nqommjbne9mnqrvrny9oj07rwqq' );
define( 'AUTH_SALT',        'sa5hwlbqcubsax6kltmhvxfatbkqhih4og7fxuxauxbtyho3g8yo5z1gul8orl74' );
define( 'SECURE_AUTH_SALT', 'f4irstgp7wvy1gfi09jct9eox8ewol974rue46or0k9d0vmbv7umcfv04k6toc11' );
define( 'LOGGED_IN_SALT',   'vnruzm8qjkmphmegsnlzw45bdzbkqo5xe9xcjtts9johswsrn0wm87d81727zhhp' );
define( 'NONCE_SALT',       'xl3bsjfjmeir8rjiwdck10cbspr7se2cufwehjwtmwkqdafsj04htqp58wfoovv0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
