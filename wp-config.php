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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maintenance_bd' );

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
define( 'AUTH_KEY',         'wG[cZR7fN)TBeySi7~~C/8GDwM*d4Q!]rt+7v.eX5rh$j08o92Ic::rNmgMVEd(f' );
define( 'SECURE_AUTH_KEY',  '%p^ ;@b<C*1ugn`gSO/;  8`3O&oH:,K>5V-2~;sI[<y2$U8g{$=*n>(Z|:%`z)0' );
define( 'LOGGED_IN_KEY',    'D>X+>#y.cF@*|;Ee?*?I<RMFFr0|Y#-Y]=>JMWF>Q<E#IW[dd:|m=_]EH4zy|BSH' );
define( 'NONCE_KEY',        'GLxVo>o-`k=1Jo$.K?DoqZw$vwbh,Ax(#;$/e<|;/WYPr6.5tM2H!Uy(As=ky1B*' );
define( 'AUTH_SALT',        'C0,;UyIwhoWF[*&A+V:,,uw:KA(f~.HaG /#.gR8vZk`P-ND,P b[](D[)]ye!BK' );
define( 'SECURE_AUTH_SALT', 'G!oo/7gOK<fun;[fX`=E?9;F49mg}@^^%b2H6OE`J_fyVB|P U5#[i]0Kt?nlXKq' );
define( 'LOGGED_IN_SALT',   'lV^TWv#D6hMfVf1w+Q*=9q_Uyl1aZqJG5sD}G_4[M3%@5?Fh!0jI|0IA!~#gj(6%' );
define( 'NONCE_SALT',       's.mGRD w}-!*5k4~3]3+[=Ak|e(JQ6%wT2WN#EDw[+s3@lc^]faO;TL~-QN>t6Dz' );

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
