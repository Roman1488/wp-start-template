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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'dhT{2>r8~sOZ4]b}BzmUJzK9LAOPg&Ev%?-6;o3<7M?/K ?{0}Q?<f:HNqefD;(g');
define('SECURE_AUTH_KEY',  'KHAr0l6G~%,=7x*<KPOs[vMq{uC+1mDc?A|#<E% 24Nw&q.^Z-P;-=W&MwoefM5v');
define('LOGGED_IN_KEY',    'kaz<KBZvraklj&`KQ hg$a$~l6ALy(v]deY-tcJ;15d9Xwe-O.6.D@*CEIVD64`X');
define('NONCE_KEY',        'c3_QrI*)}P:+/]rROHr9dP#H`ebKPiU&wPN](yul5=2cKJgGwnIe5L#*N<_W_,_U');
define('AUTH_SALT',        'LU4cUjtqL@c0-^zCeT-Eb|s{IW-!DIa{`vwQCt(03<f1xyul;x,g<apS^J=q{XDP');
define('SECURE_AUTH_SALT', '+Zc8d@|gWoJK*)}[x|23;@a#6PCwDu_8)d`RCnoG%v)~(clSLo!21hty;=HB =~K');
define('LOGGED_IN_SALT',   'c5U{VE}=k-pdV5f`5iuzOgttN=Xx>;&B816u`$ 8~>kbg:kh(IbG1]?/jWGv#e K');
define('NONCE_SALT',       'MT#V*HBVqG q0Nlt`w]}mfV<J63$fuFp/2Y}f2i/j}3Q;mO&@=GD;J>@Jxi7,-.S');

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
