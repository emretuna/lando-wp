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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'V=MG[Se}CDxO0ev^y,IyVD0ODdZ=ub95n#-vPb9J0oBbL xieO<v0}7D#-.zcbWj' );
define( 'SECURE_AUTH_KEY',  '4^P$wiwtr,,fohef{B[d>LrR]mKY2BmMQj1L$>9]Fp{=LMaju(W<|5z,-xii;1<0' );
define( 'LOGGED_IN_KEY',    '<.%frTVH6dig*G?To{>C-h}=N>U9.$PX[vwq9:ShE>vG04Ua~}nq9n0VUk[@$CLF' );
define( 'NONCE_KEY',        '_.Uj|8:57CYz0P$o=.Kt:=GPxP[rB[-#RM&0/,/2-+r7,h?P9a2im/Mq/@ .Fjl)' );
define( 'AUTH_SALT',        '>UZee<`YOvwKsV$yEOf0R~[A}gF}r]peSR05(P2PHC?SN~|rEwe|I6,T]bfK`Jhz' );
define( 'SECURE_AUTH_SALT', 'tL=y-VMJhKK2F`.[I=_w#QFXAK?*a&tN%:!NYdQ>c7?9;E<!]2l72ey2iM,x@:4L' );
define( 'LOGGED_IN_SALT',   ')ELRsbopi,4tzglaG_cAA?9h)sK|4!_!ooHWDOR+PZtlY)()ir76p<*,&qY4 GFt' );
define( 'NONCE_SALT',       'C[5[1_tQ>AmZ+JW>7j7)b/.#RC!:VbX1?RgvYb}R{8$OnXQIKDHq3cC/,iW8=cf_' );

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
