<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rvrenova_web');

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

define('DISALLOW_FILE_EDIT', TRUE); // Sucuri Security: Tue, 12 May 2015 17:53:54 +0000


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?^Btrj[bHW68L1w;Y#X|jis6o~sRmbg,MT#SVXy|9Bbkuk*N|+,L2Q(Nx-$w6BlG');
define('SECURE_AUTH_KEY',  ' 81J^#e!x$B8&xXrCJf{)}a~4hgXZ8(y)f/}F;GD;zqvP{;v7b $-DlI&%I1E<sR');
define('LOGGED_IN_KEY',    'A:|C1`K+N]p0lo-GOP<NM%$+P&(zoAa:8mC)/?7RsZma+$o]pHeu;/JsR;9L7@1t');
define('NONCE_KEY',        '~oyX8LmaLvxzU-`A+,]z`38n|# [@;X)i}K~A5vch_[]mNld*{/SYa+tzkSzVZLL');
define('AUTH_SALT',        ' (hv<nGyy)4VGRPC:l2{r%y0y?w0|#7s<@sa$#5N#6JF92=LUbZWRG*N ]%KPB% ');
define('SECURE_AUTH_SALT', ':xVcmeLa|VXvtgs7fT}A1h|9FbWR5ft-XZ.9Yd]o{219kWBuw^{@r{OzRxD!.{oo');
define('LOGGED_IN_SALT',   '=^qu<|1uq8B%R-`dfa+|Q*k{-SlCh-(STnfx)i1UAw$/P%%#7E0E3-bq3K8]-N*H');
define('NONCE_SALT',       'Z|>mf~5I22^ze0N(lzWf]PSOu{[xm+)6z1L0[iY&`hC8NO!jB91u*;JfVmV;7~93');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

define('WP_ENV', 'development');
define('WP_DEBUG', false);
/*ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
