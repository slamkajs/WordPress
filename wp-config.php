<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'justinslamka');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ';q1-%f/E..k)FI(m]mlDKvl2X}fklL1EN3hmoeU]/Aw/hu>#f8],SzpFP@Z/OvU+');
define('SECURE_AUTH_KEY',  'VLKf^Rjk[&31kZiW=oku +a}kL9hPAX;F7vGjBI0I-,7M+<S8=|/j@3ixF,Eoz>&');
define('LOGGED_IN_KEY',    'Er3P+fv?J6%a+7L-eW9mV(+aD-A+4%xP+0ZcQj+U.M.wZ7HG0a*FzIPbcmWig%cX');
define('NONCE_KEY',        '5FB&:EU%rRR5BQb- qbc#H_cznny+Y3,VX|2v4!axzT*W4MHKl%l ZL-FnJ!|EH6');
define('AUTH_SALT',        'm?8]1T4i2)R^2%]cr,pdx{*n&ZG=A&O`4r6FiJ@BL8xmmq!umDaoalXv,07x0;#w');
define('SECURE_AUTH_SALT', 'k|rb?`d`0^W[#r, 3Y-SZR6<u.. nwOa(~(gy!OpPI]XF-+/5| xa+6Xq~-}`}.v');
define('LOGGED_IN_SALT',   '?#qV8-(w{)4T]|-nQV+&r,ViGjJr$6`+bf%yq@[Nq@Mg C$n$)ESb?%%3h>f-|x&');
define('NONCE_SALT',       'N7*U2 xe-svEfNa-_dGe?eyZ^yJ*/W[aESf9e?ij7-UDiA=PiMpsQ>$5c`zAf90V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
