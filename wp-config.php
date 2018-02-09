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
define('DB_NAME', 'wpfolder');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Lord64876');

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
define('AUTH_KEY',         'CBZ,F<$+W7LZgpY~hx|S`r/K}s9BvJP#1JUh,L}jsrSpBm&@Vv[>V^_r5YqJv^Hh');
define('SECURE_AUTH_KEY',  '(AC,c*w2se.{=1df_H,}=jH*wo=h%B/h,*qg kIM} A@.hicWHf7j6BoJfi@WaCP');
define('LOGGED_IN_KEY',    'dud^YI{Z}@oz9ll#L>$W58o>v#8@Ifh&uh3*a|~(FV*x~^W]ymy(WHAk6?Roa|@W');
define('NONCE_KEY',        ' )`okRxt4kKHHLo,nt0@ttD_5mn.cQZj1&}*n=dL^JWVtl09JPMKc8TuB5O8]:m@');
define('AUTH_SALT',        'JYXe: 6 Q2?Js|{xlOvWaFmNBAd<X)z,_u5~4 umjd2 4FNDc*osD-=lbf!It|S$');
define('SECURE_AUTH_SALT', 'GrS=:V#iVWk@>zm!KxJ&[(IoBE4ytUN+qNm4sX(:J4n=:h<ku4T9~hdUE# K~eho');
define('LOGGED_IN_SALT',   'jhi.rHiRq^J}KB(S>;,SPJgPB;,v99,,Y9O(o6/}@&Ip7I`LI8dP#XZ,(|5 i+Zx');
define('NONCE_SALT',       'sgKVlc%CLFEAnHyyGS,aRqh##V2R#Ptmr/2+oMwQt>r30-M`?uP4wOM!oY2gPFAZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fe_';

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
