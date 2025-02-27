<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u146019404_CCwnc' );

/** Database username */
define( 'DB_USER', 'u146019404_nhLHy' );

/** Database password */
define( 'DB_PASSWORD', 'uqE8EtLCcy' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's93M)* F,aY4NHTg~>!>o9nh3N%zted9/i 1(<sIN*?bF> jUb(iV}%s,(_^@Rv3' );
define( 'SECURE_AUTH_KEY',   'y`+1ta-1k#.-b),$Jaz<,qU] Hn(jV*2Alzi+Rxv-rS<2W=6W$0sW+JXuL+x26zP' );
define( 'LOGGED_IN_KEY',     'sWd9ctGyTI B0.LkaV!JbS5T9W|uU_f:Vo{K[*2@Hwt%_fnr3F}w,GcrO.O|]zy?' );
define( 'NONCE_KEY',         'j4ldy{YzWt+V]1A:c+l0JKPn,hr$I_rsk>-$-PNQu?cYO8GHzKf>7HO6F}UWjh.E' );
define( 'AUTH_SALT',         'z[Z|w1+gSa {vL;>[irzlVNinG i-2SO+:K@KDZh^x3p#![AB<<AUVr>SsAxJ64N' );
define( 'SECURE_AUTH_SALT',  '1q6o*u@`{s/)g<HoTucf7MjaO<BK(TJj|97kB4n%AF,5m+n1bom,TfTo:._: d1g' );
define( 'LOGGED_IN_SALT',    'nQ1kAPpV*N1p1XDww)uyf{n4=Y1qg^qo=9e3w1b`3:e>,ZccT2MPJS{ql|:qTn*3' );
define( 'NONCE_SALT',        'rK$`n,5mSn%U=Lr=WAhPhH&?K:lD3yZLzE*%&WQmG9aIY4k+,{irT*4tvh*Y|2/Y' );
define( 'WP_CACHE_KEY_SALT', ']kk3>m{AK2zUIx?yuO.b4nzFIkXV=eD.t2Aqd#.G_Fz*z[SU0%EgFFH8j|czykr]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '8ad25246bf856bdba8090e20c8f84303' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
