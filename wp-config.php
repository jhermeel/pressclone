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
define( 'DB_NAME', 'press' );

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
define( 'AUTH_KEY',         '{d)0Uj7_LR]GC>_/em!(!V(;pt1Jrk<{y~V=(+;idHA!jnSK?q$(@;D%B?H4~Bp_' );
define( 'SECURE_AUTH_KEY',  'lsO+dm6Ye&C#zZt[dA@mX]R-Fz3phx`NyF{U[Rx$_#0wQ<|V:[|yO;;.ILao/W|p' );
define( 'LOGGED_IN_KEY',    'B~hn[|Prl?P&Yy-Vcc9+rt;KI]cP/XR|,I)[Ho9n,k>~g]&-#<eAKLq]RX9%msWr' );
define( 'NONCE_KEY',        'B%<Fg{T*wYWJui>M1RxKf2,sP7{g)n:Ks,;qpa,`4,51R)A{BtFGSO:/uc~=hluQ' );
define( 'AUTH_SALT',        'T[tG=:+Ep7D8A@nPqS,6r+HG[d^uxGH[^mm)d|3kN2(|_3sA/FW^%(g=:DUn1RP?' );
define( 'SECURE_AUTH_SALT', 'aZy ^5Gqdzok).hql<_{KG%4N)f_hz#|%UG*tdM.J<}Ya]EkN#,NU+k^6zxL~ZMM' );
define( 'LOGGED_IN_SALT',   'Gf2Zqo`8Gf,g9h-YN1[sg).#WWJJue/$Gpba}xSPdyp/8B>A$&!38I;0xP|I^8o1' );
define( 'NONCE_SALT',       ';750VMg.fU0J2.p2GSTmdK]$<uEhV@[aqNVxSn6bntI,b$j-qrmi$=Eqy5$E1+aY' );

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
