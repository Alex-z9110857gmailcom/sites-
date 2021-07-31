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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'www' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D3BfzP,3&/GM^s&Ed0DNG}Ao0Et>$G]B.&ng!Y#o{#}A#reY/S8<cu.1+p3Sj=c~' );
define( 'SECURE_AUTH_KEY',  '^B4f(*$QK}6HB>Yz-h0;n>x&3q`qy8_66WPKC90zi) -etk{,Rb(79w&V8jxf?%{' );
define( 'LOGGED_IN_KEY',    'UlXj?Md^tdv7i^zY2D6pE9g~[6Hf-gj$[YwK92p|FtHt_1#F%`_Vm{#d/;ry~n8>' );
define( 'NONCE_KEY',        'Z?bVmp1Gb!V|Y:O5%j|px!uU`Q=Tyhw!.s68m7@eM-$C+,z7m9rrg[U1+*Z2#1<I' );
define( 'AUTH_SALT',        'hEZ%fPh%7HLCT=D_T7SafHJ4+y|5ZcI]63L7./|H>R9M^QMy)AZ.v7@^s.38Ola,' );
define( 'SECURE_AUTH_SALT', '9/P|I=?Hr`}Y;]}y!Rp(]JVYK]nHf6rB))N]6l]PRA_:Yk0Rsy)*$vxE`.;_kd7#' );
define( 'LOGGED_IN_SALT',   'y6WK{.`nIQg1)gSU[~+J{w3_+V$t5-]951qOfr;E7)-?!#;97+~SPd=%n~x39,dU' );
define( 'NONCE_SALT',       'gz[2q.d=*jS[}d+e&=Qh|B5OTR;,E0)qB`UJyuFZ3$<h9AyEbJe2h01tp.s3Z86g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
