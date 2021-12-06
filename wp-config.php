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
define( 'DB_NAME', 'Hilarious' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'n1vm|5TE0dF&hK7txL@/U[}3q89gF]kB}:[eZ ]ZZ+J[,[&P|apEM8E6FBH`mBL:' );
define( 'SECURE_AUTH_KEY',  '9P{x$(VgW0$hV_c+z7^JX*s7%O/n78EEaN+RL,tcBxFs`Yg+|yRmkd?bYpk:?fLp' );
define( 'LOGGED_IN_KEY',    'm dK2<>iFneMBi}QcZ`l&)_3<+hBw&5 4IiF:I2al*5,X.< S<sNzqz#CyE}ne@g' );
define( 'NONCE_KEY',        ':|/@aQMSh^W#Egh!sh6t@0pN2Xd>z_5p=0%Ryv):0&PB^b1s&8)uUbXBr1v.vC/7' );
define( 'AUTH_SALT',        '!5>(c&VTi&=ImUbv1|rC`c<]6~(]!3.T![mN$u(5vh[2Fa[AN)$1v?x*6ctT6=t>' );
define( 'SECURE_AUTH_SALT', 'G]m{iG2]_dL!<c!h5s~jyTT)(4>2U),9u8jARN7G.alhHdE;L(QIvaK&;Y.]9;|w' );
define( 'LOGGED_IN_SALT',   't#SaNWw~st!mSw*7g>6sVMQ.#/YmLL1?& KeRt&;k[KjingD?|kSjBD8Yb[>~P~}' );
define( 'NONCE_SALT',       '7qzLOtUTKDKi/./)Mm^9%f#M%ZwSX)dJ V@e3XlFBfR1Kz]`p>nt0+Ow~cv>tI1<' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
