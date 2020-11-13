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
define( 'DB_NAME', 'testDoc_db' );

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
define( 'AUTH_KEY',         '_lU&65s6T7ueSM?u~;>C^LzL#g|1.])!@GzCc*NZ%O~+mt^3]F_gw !5y9:&ye3[' );
define( 'SECURE_AUTH_KEY',  '?>FAH$@h&_#Zk+yi@b_c&%8!XSyX=/ToO);/!c6laS*rqz%nB3@7U(-(^5l:i<on' );
define( 'LOGGED_IN_KEY',    'x tmJ!M&OJ9$uzwMChuf]g7Xn0/e?~#);q-HPDaYn?6o;bC}qvk!s!t&&A}N%l%T' );
define( 'NONCE_KEY',        'is~=7]U+(Gq^drc8V,xmf;pc6y|gsc*GSv}c{9RtrM|}_C67Mv.qYO2xjOfdhCB+' );
define( 'AUTH_SALT',        '8dJL:qL.+txK$Iy!]|EB[,E@z7P]RFmfc_~S|aK3<rr,t3Oy lEMaEJ})pH=Af81' );
define( 'SECURE_AUTH_SALT', 'DKp>b9Pc.C^hE{BhA9& ,.n:c}]eSKMub2Gj]w32K2q%=Trt!WrC:RO>1-F(wL`L' );
define( 'LOGGED_IN_SALT',   '[p_n;$K#4MXW:6v|sfuTs{+L=FM;jQyn;bM=@W+M(W`Ac4C2b3INbp*{x_W 0kxP' );
define( 'NONCE_SALT',       'zbPuK`0RYU2Mthu^;0G]/U-PYuN/y+,xbl3r0-S8I:}Qq_,fBf>kRDV*3@VP6O4o' );

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
