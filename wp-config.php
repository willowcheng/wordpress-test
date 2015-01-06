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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'cl1991112710');

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
define('AUTH_KEY',         '7BCn]z+ju(Vk6n]htoXJUu073d4#:y15) _qY[`-6RnE^bXo|_xFTx/]IqD7[Qx.');
define('SECURE_AUTH_KEY',  'me7lRGA?-!.I:-;88f,H9:,Y;OT@QqMY^U[@e|.H^l4.8-_F)HiPv|9H(]a>[iQ4');
define('LOGGED_IN_KEY',    'f2)&YZVNo9Eoh`k-Vu3t4Rg{7-|-$,4(XQqA0<*Jw`im]s A{EeWT wU9!+e+kNl');
define('NONCE_KEY',        '@7#>N+bec}|;^oZY &s3fj;Rd.-U3,,C. hl4gnth4NLx-`=%+_h@QJ!A1sQC#%S');
define('AUTH_SALT',        '|]:m10-&:;p13t`4lY{9~CG|V`zEnlMRZj|j,Az>uJ*KYnlfIAML(B6[8Fhml#db');
define('SECURE_AUTH_SALT', 'Rf9d;[V&3LOk,5Zhqe#_oECaXN+`eR)7-WaNp!zzFJgYq66IAhmL6(:`,=sE{Y?C');
define('LOGGED_IN_SALT',   '|gjIOc&(B<V7m_O%1hj2<-}V+!=*iZ=34PP0R|Q?(/qUNA/Kw`GF/l4z.F>SZ-M|');
define('NONCE_SALT',       'EhHzrEV|k6hPw8b@@fHJu-JO|!F_S|31a6Mc-%;BEc{n!nt#;(.8T!FpSiLV&K%@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
