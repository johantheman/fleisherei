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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_fleisherei');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G#OGul/zVS[O3sWSi5@Mkt86k`63KcT!5{t8SiT8O4;J)T^vQELQfbcCCxP^BD$A');
define('SECURE_AUTH_KEY',  'FdOp1G@09;7OW)Mkh2T}z,HRJUThaitCa@:Ch]Si7`4yvZn[cvrV)g{)7QoCI_qq');
define('LOGGED_IN_KEY',    '>|TKti*%L3BwZ4So3Kd<w!.)A!>^T~QR$]5@]z|Yc,FVlUd6v1:2BPx>$_taYSKr');
define('NONCE_KEY',        'Cfvmvt`>Q&`Z=Y@ vldYs_OwQNA^s;7RjhJq#*:Y#Zyj+k%-CxV2@egL?_vZi_EK');
define('AUTH_SALT',        'yQ9|L!qgw0Qg]w-h9)rG-eMY~3)@z?]l#XsvUZ0xvS{u*:@dpqES@110h;vbjJL/');
define('SECURE_AUTH_SALT', 'yTsE.2(!Jn4vJYq4`wAl.!vWbA<>3kf2Iwl+lF<~|^<=$qtXc{:`X-f?>LCuBl+d');
define('LOGGED_IN_SALT',   'n*%5sZ mNNTnXnN>l?oeia8O,mRC[M9Y=C^-Xh~G=|{Qw_ld_Q/<+=^&9|In;p}s');
define('NONCE_SALT',       'LV~%qhl).Qgu:fnq%S?&NZrLRoUnfa{)=[5A6!#|$&0}p|$0;c-iXfTQDj$o.pG!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
