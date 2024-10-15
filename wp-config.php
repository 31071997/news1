<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         'b|vswIti Go@&OTJO>.4}&tz/Emxx3|[)n@WF.x%5bCrtCe@~9=Gv:0X7)pE,bv,' );
define( 'SECURE_AUTH_KEY',  '2;|u}&QTrtq%8CZ7AJMh~fl([S~q3^`oi4v(}JMJ){_g{zrH_]+Y4z:1x2GH=MeB' );
define( 'LOGGED_IN_KEY',    '}w0M[wTZ/~3oye6;[,KV7,N)~k#;_X8=V<Ggw*1-J+*Q{t(SsDF2<VP{,78 ce<e' );
define( 'NONCE_KEY',        '&uee=mEPjET4LK|mW--|,b Sf6Mcjd*SUGRz0`.H@KEUh]kd<:%#*3KLmlVzE4Xa' );
define( 'AUTH_SALT',        'du>/bD@`Bbwsw<d*ZqsS?0`@NE/$)$w|Z+wj #DynDo,7#vV%R_9TLdqj_#<{3Wt' );
define( 'SECURE_AUTH_SALT', 'B >0d0zg[jYwc&Q7,H?kKKrsDkE5Cy_KdON|R?m1jo`jDQ9H`,[[3dFG=xGTc6 e' );
define( 'LOGGED_IN_SALT',   'u_{0qmY>Nvl.NfY yc[,H]WO}:Vhhm:DB:R->O?~0a0,SSVU<LWxWq867jyR?Z>S' );
define( 'NONCE_SALT',       '|C~o![`mYV`6[JJOdf/d.=HVqxu?*k1#^wQ}F?(}}SLr$&ROZ|6RoQL5o%(3;,EU' );

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
