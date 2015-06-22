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
define('DB_NAME', 'rouxblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u&QLVL)EZSEvV=/&|G/|<_?%CXcVqV==4-@*<sjn+JQYG8>9FJbE.t &BlhcG:n;');
define('SECURE_AUTH_KEY',  'E62W8P cOAiKYY8Ah1R-hs}tj.N3]GZ&hc^*=+QAjXhB7-Gt.3WgMfA[{(A=~O|R');
define('LOGGED_IN_KEY',    '-!LGOO/-zR#$g~K3c%@U*rFh5JrsC{dphUow[-s(PyL-^TEzf],KvqkY6WPGr8O;');
define('NONCE_KEY',        '@mDIZ,7|iBla/jp!@9Ri^#5n~HZ$GLVnSY[,j}Rs<)o3xiR!q};t.JZ+=@(|So-Y');
define('AUTH_SALT',        'H{^ym-!111a2+9%i,>-UM]xydVA]-WQ|&o^+{UYIP L^kwkv/u(JIO ?}|X._A{r');
define('SECURE_AUTH_SALT', 'cl5{`~|/u5NmJOfF2g!6NQcF9He]b,SZ*1@T,=l%o*-}+?@@->C9Yb=^P<kdVf1u');
define('LOGGED_IN_SALT',   '+*A7nP#eOz50^s,+!9XWZ_|z pnRC5te$VHlB)4weWsIAFzN7I0jab8|4=]i!-Js');
define('NONCE_SALT',       'wl;pX:@}2HZ[n*+E3ucedli8[wo2jdE3DN^<nRSvmB0`561vH_|,-jX&@#B!);0I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pw_';

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
