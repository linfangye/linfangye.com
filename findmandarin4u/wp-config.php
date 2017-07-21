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
define('DB_NAME', 'autobea1_findmandarin4u');

/** MySQL database username */
define('DB_USER', 'autobea1_admin');

/** MySQL database password */
define('DB_PASSWORD', 'mu3368722');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME','http://funmandarin4u.net/');
define('WP_SITEURL','http://funmandarin4u.net/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(bt~j_JMAEBz5|eX&kdc9Y:7BN7INL]g95+`Qm4==kb`a[`[U(h8-GT2~Z):X:c]');
define('SECURE_AUTH_KEY',  'lTT+|:|o-(AY.DUL]*e%pcTGRk]0;jV@mt`|.Mq2OC(hR.%<J+vo@X0ato|E.xDl');
define('LOGGED_IN_KEY',    'ybDyCyIQ6>$PuVEQ!FhV*d.bN(aZ~apppI-QSo;$wiD~eP16|hpHo~O{s.(VUg,{');
define('NONCE_KEY',        'Cp%`26&d_Srh`k=|BEQ%AHps~YeB>VC~&.cJqpdc/l}2Tk3RP|Ucju]<0.D=r+)&');
define('AUTH_SALT',        ' (bc#|qy=sV@iM?.UH.wl@qswM.Mw73!fxw@Cq<6+;`.%m+gw,.i)LCIedjcYua!');
define('SECURE_AUTH_SALT', 'g|:%le[BAB7mOh_]4-qcJ.+hchwxLgL^F &n2lH6GOb|@^3#|! *yhuqvrf(a~56');
define('LOGGED_IN_SALT',   '[6$Et7)QUA2X:+YaN .zI^qFqGj>2a%#(JLe|nM;0l:KI+%6T)WOp6^qoF3.%GMe');
define('NONCE_SALT',       'aC`,z6BujP[FX8eSF,)+xJ:JV+uyUIhIcyEDnTA0RFe+b>`g#Hh9J~BNX9}&Th/(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fm4u_';

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
