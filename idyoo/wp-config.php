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
define('DB_NAME', 'idyoo');

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
define('AUTH_KEY',         'to;G!Khu#<_Mb],RTt0=TX9Io,U+YP=dUJu5%>u-}z8ldK%^pPu^MP29}P?^9r[N');
define('SECURE_AUTH_KEY',  '|jwk|Eu,).rw+8z;k?#pxAW2]^*._f!SdlB6Y)[>T_|QF|wTp@Pr=~=Q&uTTsr X');
define('LOGGED_IN_KEY',    'YRD7?_z-3t:!J]P=pRSC:/8e3>jb$2x}>gr=OqJf~V(u< z$r>Kt{;Q?w{otukfs');
define('NONCE_KEY',        '>-8F3=K<Bilu6&PL_C;/t! dt[.Inz1Jn%r/wsGhx3@TribV8(F/DCfw&*q&}VY~');
define('AUTH_SALT',        'sT:<eLf5MEZ?URVTb0m$0Eu)2kcvI `d:baVE?<+Ix+banF;]|DS;N@ncDg7M6mw');
define('SECURE_AUTH_SALT', 'W,P(:N`nH9m5}}]yA~>T7~cAx}k<rlhzy{,vP4XkZb:)qiG7)aKVZx|MZPPY:#J6');
define('LOGGED_IN_SALT',   's%hc^al}$TVQ%g<)Y$Wlzy.e6MG{@&=@=% TR}7nz!/NrnH%wa$!<?#/<Jv][&z|');
define('NONCE_SALT',       'P)}f!qX^uDby;z;]mU5e@^6(n!D98UXGDJdTP&KgxuFCc+Ta3yCIs|9~HWRr~lL|');

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
