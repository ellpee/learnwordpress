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
define('DB_NAME', 'learnwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'e|msD=~An}G*Ppj)<PS^}a+sXwe7qyW!wbj<gj>2&@4CLx[BV4S;{m~$Oh[J=xax');
define('SECURE_AUTH_KEY',  'lWtdyc-kPYglittqFLT~b6zO_]iOj8o$bhk5Jn,]0pSKkkH_:$9g7p]208/etj9I');
define('LOGGED_IN_KEY',    'n^Pd)-2hLy~C2SLu.W-d0m<b{p*I!]#e[z4G/p0E/XHyo|*uv )_nVYHG|HZ}N9@');
define('NONCE_KEY',        '=7 9J}{A9(h=mB{qKad~)osk*D{!R1#Q>[@t>4k8?msZ/Vk`HV@miK*e]?Q_Vg8I');
define('AUTH_SALT',        '|b0h,]TS0Jh<.Fo<Y] `7seJ:uyenO`sG;E{61p9q;C^#3JwkJC3k;Z u(xlSxU`');
define('SECURE_AUTH_SALT', 'Qcc7~4k|(b9a>%b~PFi~}_iv:RakumgnnPijf?nRHU| <MU`6fs@t$bWgwzMA`?,');
define('LOGGED_IN_SALT',   'k-5s8TfL[ZQk?c`^49giT3#*3?C1n(Ri&kSf4`3D<l?zBPrN#X9Y~ }D&2T*RAZb');
define('NONCE_SALT',       'nw>PRPd`!>L;##:](,9xfqS|~5AkTtKju25,~uCqE2.gU0O%jH]pBE.W*4iGz9(y');

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
