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
define('DB_NAME', 'db_personal');

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
define('AUTH_KEY',         'hl3dBaW8Vi)O:Ksw?I%YGvXd+ w0|yLz9aNTPz^Lua_CW!R`cg?BoI?Qk34Q+G*/');
define('SECURE_AUTH_KEY',  'o.XU7|W(Z*)tIDr|p:*hQ6f=S[a5|hP2KT]v1<E2FeCN-6nM}Kjl#28k1zsq OoX');
define('LOGGED_IN_KEY',    'p/3^)pSH~|~IZ0CTu60)YXoJSt}!GN>XRAD]Nx)cmGwZ_%}j[~{:<V^2Q2n$n-th');
define('NONCE_KEY',        '?b d-2@Jfzi:iyJN9mF_:,9Z&Toy1Jb))h,&P.4#1KsfaTJdthDKRq_Q?V8.&8qm');
define('AUTH_SALT',        'J$mdhDpw*l.kVCvmJr={>TyJ>7P-dQif`@xVx}lJP+];610?3<E9yaf@HJieT[l+');
define('SECURE_AUTH_SALT', '?,TfOE G%:!^pN}sQYa[QG9X7Ue;<~PiEuKOeI&U8?SV3y=27TWkMH,>TwDoi6Z)');
define('LOGGED_IN_SALT',   'Cwu~dieE,GXUnnt0&2,B/C4bb/Wm;&mJn;iILIFrBq/OeH>!6{hv,sjBw1PQB)dU');
define('NONCE_SALT',       'pZ8jHlM#i*H72-4K$j7I@N[wrLtL 5PDob-,p|?V!>U?uTvB;AM_w&;JM`7Wc6]L');

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
