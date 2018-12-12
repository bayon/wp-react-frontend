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
define('DB_NAME', 'wp_job');

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
define('AUTH_KEY',         '5MJdS7`F)dm:cgAiEgG4#0Y>BBuU)=ff8tn9qd3!r2?+L3[HtukTeumN^F:]u]};');
define('SECURE_AUTH_KEY',  'Rje/{;r#[.9Xc)lZ-,Ly+GdbwP%+@.OC{dl@Rc0tY-uihoiMTb]<6t C)MG9)v]O');
define('LOGGED_IN_KEY',    'WT8|F&yj5lA9_^uI$!*HHvki%`I/~I2YZ ap{w}U0luBbxUc4<a9Fh/|+RO@7c08');
define('NONCE_KEY',        '+_kyb<`&_8SFt`unV?]EyG,k1R/]H r33Q)f(p>Uf1p|<jQS~4+py3D]%:U+/Td+');
define('AUTH_SALT',        'dC7o#beVq4pG;NY-n1yAe$+-zN#a.Q_Ssa4fC|$Q;$N@2TlcKcyD<*?L]1H)e#$(');
define('SECURE_AUTH_SALT', 'j}B#i(Sk+1xwSe~j.TrFT/d)$iUoDh$nmz::jXoW,V9fRxiye2 k?/_d ^$roV2+');
define('LOGGED_IN_SALT',   ')gRS3v^YTAj95J]=ozLXqLL@({qd{J!-1eVf0kk$@#h:@0Q$mJE1ClKJf?}}GI:l');
define('NONCE_SALT',       ':}5pQCs=IFpB+}Hl&e8zw<=yCa9H?wQoz=^~OY6MR=0Aa%$K6_X_7.xu>0z3C%aT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'job_';

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
