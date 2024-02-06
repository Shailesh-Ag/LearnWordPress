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
define( 'DB_NAME', 'wordele' );

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
define( 'AUTH_KEY',         '2yX-@UA(HP:sa^>>G(1uG%H7Ed0.TSM{l{/d027{.z^(ZLLLqjNnCGE::]r9##~4' );
define( 'SECURE_AUTH_KEY',  'keYSFD7*9^;Pk0G B[*k=l83-y)+n4~x)#~56@d]f7+{Pa]rVMlGp(dsZO}9WHd/' );
define( 'LOGGED_IN_KEY',    '8Y<uAFnhtZ~BK3fpF19n2X=d*Db%VTtdhme1)ZA~DrsoI%1^l}eB{CWXzL/u3fyu' );
define( 'NONCE_KEY',        'i;HcJ)D_F3ru1EYpN>JXA[B7^x$D-rF2u%vJub{$%4`%-}byVyT.ChSfpM}R3AS{' );
define( 'AUTH_SALT',        '*Q6.CD-qGIK24r49Ic}{[oMM`8.f68KdW/oI!},j2N^cB!&NBAlJ_+]s2sLC%f=5' );
define( 'SECURE_AUTH_SALT', 'DMxEqr+:De1?}d8Lp%PQQlSHQ2H^Uw?HhvtV`uRGU$zl_mJ/9|7LSac*b6oWtW>*' );
define( 'LOGGED_IN_SALT',   '+/kA]$an xW ?}hr)HBSX9J8=p)^$SG%uO&/$[;^W~tgBcdSPLSGQ],4cmP}xYV6' );
define( 'NONCE_SALT',       '}@S+,i()>?|:(qSZ6Tyi4bkQ~}w&wy[7G#_`%+sQfpm6gzbW@^X~:[/<2B-Vn,3B' );

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
