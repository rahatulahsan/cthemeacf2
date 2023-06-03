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
define( 'DB_NAME', 'cthemeacf2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'u )<5-Fj:Q2O2FP 1K/UG{%khnn}MX${{I}QH@,|zm33LjQuo}]+W@r(,$r[G]m)' );
define( 'SECURE_AUTH_KEY',  '2Bm-r,B#[^PF1V;4S|;S!FDD`l4NskwObi/J*oCb=c iU(zS]3]Kcq~X.+NK=#yl' );
define( 'LOGGED_IN_KEY',    'nADsgsknmLz%5gR#v%ij*OWIbX>OJSd0}mQepK~O0Tk(Wy[NJW@+I334a)+<noY)' );
define( 'NONCE_KEY',        '3*3g08!H1PZqKFZ_T,`XLv3@L_qKsPf/A>e<(IhVG`chb^T;2&%R;ypypyLdUNcG' );
define( 'AUTH_SALT',        '2WH/4x6PUF1,;-, C!S8mPh85hP9y;B?{yK4pr2D;I/!MyP1ls[It@Q^iua?P5UT' );
define( 'SECURE_AUTH_SALT', '%SkfwLCZ3v|8NDK>yRHat@7yHEWNFlQ4&r>2G$^d*?S%yOr$0g_,?P?W)T&N4B@1' );
define( 'LOGGED_IN_SALT',   'p$xzD+_/802?(R*:C~3~qb{lZ-[AMYn53U3myC#{(4q:<Ti`OK& !6H2QlXIid <' );
define( 'NONCE_SALT',       'RU90/VkaYJI)[4oG*cAw7qvIqOZfSia!no]j)NWF W#4LS^Wdbyra5I<cx|a*hrC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
