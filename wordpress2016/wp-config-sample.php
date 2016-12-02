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
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', ');

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
 define('AUTH_KEY',         'uXK|^Cm gK,=|mk%99+z>cXaDa?F+jop&PURt[wf/B}ie;lLDY][7fL~|eJMLI57');
 define('SECURE_AUTH_KEY',  'vk>OWjKRR4_|eW?@@C---3-9rB]1r44[MuLC_*tDT,6El),S5bW#W{X9HM_.r.VO');
 define('LOGGED_IN_KEY',    ')7$R|WL:td_3prkfO$R&>@h^L:-xD/E-gm[Pgy-.MwV)WbuU]<]swrgfHl4~?E=1');
 define('NONCE_KEY',        'ID7qf#%+i`DUlbi^.Yv3KO<b!OdQsA`5%E6ea{W%DKF^z4hkW@KEZ:U-Z?,FC`ba');
 define('AUTH_SALT',        'rTe:|99]a$?o%oIuq=<A--3p6AD69`-9<M|v/FiW8PHHXT`R3%T_B3QwL<+tVACw');
 define('SECURE_AUTH_SALT', 'bcK/LU*@6YA9*8oLr8~ocC535/@p:Z.uBXhD=.y>h,M}pz^ iX(}G0- cfO|Z[u0');
 define('LOGGED_IN_SALT',   'B<$o||&,8 AN/^mLk_xEmE%,.$t)BMROnv|G3g.He#0/E.m)u}D>ChAMBVgOj -o');
 define('NONCE_SALT',       '5aU8Z34%p+L_ldhX=gZq}t+_}g~r]<i>Iwi5&zY$.1*J2.1O|_9CpC<IeU:Aq,+R');

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
