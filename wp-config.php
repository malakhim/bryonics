<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'bryonics');

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
define('AUTH_KEY',         '<kfC,l@Gt2w#7g&nDZPcI^|(K<Dd{peQ:|E77!2];i)46a&0>|iI6,Dz=22<X>d4');
define('SECURE_AUTH_KEY',  'ZWr0sb:W{OWbTNH``[h>_W#PjBTt|Jp+y0O9{Jk,$ -$r-:NpFDqmB.Pg`D ks;r');
define('LOGGED_IN_KEY',    '@|+Al)&p49[+F-L@g;3IdFG_`P0LDd2i~J-hJki.Jf]&]-X3`C*B+(bi/rne-c#0');
define('NONCE_KEY',        'LG#.*!K&I!J~+lfWWkZ4~K5Bs8_^(9rtDa*x=xoB.4U@yLKtJ`P|%hy2;m<,`#p!');
define('AUTH_SALT',        'r({TW#;c8yvkXAqiI&N&|D,wQ0:vS9^loY?Z5G4S+hvE| fOMmq=%N%k&u}~F%JC');
define('SECURE_AUTH_SALT', 'I@QA3+lH.2iSg]Xfqs8-)r:)x ?TY)sTBzrN4T3s*rIVG_(bd/-|TznEr-GW91Po');
define('LOGGED_IN_SALT',   'dR1gNDhU4Q779M.$&F)X85- r.-/Hhm+j8>6IEd=3.WL-`0:ZLh$e| 0IIlP8O4a');
define('NONCE_SALT',       'x&<uDUlig]2OSCo!OR:Ip{uPU|FvHOmM-}!<Vp-_+{HN-U9&: ZG3FKWDV&ITO{K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
