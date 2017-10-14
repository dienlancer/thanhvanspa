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
define('DB_NAME', 'thanhvanspa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '@%QcwWc* BvP=%Q<w1^YqC5{?p39wK6gJ*}EOm=zj=)CRO0GqMQG^m$NYC_>t[Xn');
define('SECURE_AUTH_KEY',  'LT/~sqci3w#c.*&IzOS^aYrE0CCCmACf?1u?U69xowg^i DN{1Q*`r]z>,Kt$W1l');
define('LOGGED_IN_KEY',    'I<52FsCTbXENsmp^d(Qa,[nLtecFeCPs}wyQ%LP/ .w,h;k$a;5m!*&R3`A3F$_C');
define('NONCE_KEY',        '@x-P@T+&,R*ZY57$NAU4ulRGu-RI(d4{r}K*2CwIL#kUg=fTW8)vPt! n;6#:5{R');
define('AUTH_SALT',        '+gSI$*kj!iRTqJNb!rokC9WKw>oY#)4-N@dx[FJuW#PHB/]7Sj]I#=+Q7ty$|aBl');
define('SECURE_AUTH_SALT', 'i fUip,s# &jIcQr*s?op/>g/J#Q[vt)L&MeZR?5Tfo3H5Op11YxQx4F,QcZG^x%');
define('LOGGED_IN_SALT',   '!CCoNirf]:z@Qq?kJz=sX[kzHteKzAcmwuBDfQ[P,EE,u_,u/eT[YgUsCDLr?!pr');
define('NONCE_SALT',       'JlTEj>:PQ2Q^Q 4?SJUQLW9{fB]%0y(w~hof$.I?#}Owr`PSgg68el+^8X=EWG4P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tvs_';

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
