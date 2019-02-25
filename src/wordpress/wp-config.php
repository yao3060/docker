<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

// Disable Javascript Concatenation
// define('CONCATENATE_SCRIPTS', false);
define('SCRIPT_DEBUG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'domain');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY', '+H8}PAQl&7Yw<rU5+wuQ +1U}50=/vL>MoI|?a?,O7mop@eB66[r@{DB1r<W(s^/');
define('SECURE_AUTH_KEY', 'PH,7~l*ZO.&M4lC]eVu`$=uL<GGp!LJIU$k(WCvdf~(9 _}z|Z+qGsNxe)b+PpGg');
define('LOGGED_IN_KEY', 's[[W=p).)8//m</[p1gU-DG[EvZkPG~N>~]o]S)n`b}_ZJC(@sycI=wdZLMYbma.');
define('NONCE_KEY', 'k2MyN/ynZP7Z{,~7u~!d@c./l4:YNp|mQI+33B=},2xDMv$-!a*Qt)+{exL-?AsV');
define('AUTH_SALT', '3V,qJ+Yt3_5F/4J+VS,=!RJml~vf&[rHPV.xIhs|@v1T.TO-RX%Tj`P^;r:p`M|B');
define('SECURE_AUTH_SALT', ',J{83?=p^+7!zpb0`(W%_`9N?LL~R(cAb{KFe!BfGCI)Om*yL<5v9/SNaX<,~<sH');
define('LOGGED_IN_SALT', 'k%FnbhTT!^$SVJiw`D#`4(u{30[7h<AxV3|(@s+Gz4|M8}R~B{]b:BLzLq%>@jRT');
define('NONCE_SALT', '_Kek#GmqrE-42z^i~@f6f<`hcr#ohrzogPfh99;(_hicP;@dBzN=Mv@DyF~_h n9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
