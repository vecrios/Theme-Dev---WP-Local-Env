<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressLocalDB');

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
define('AUTH_KEY',         'BwFt!CWKz,j>ZShM|wz+!d<;y=E(-@I~kHo7#XvGog]:t4F5.1eb2q2^#Z,#DaC9');
define('SECURE_AUTH_KEY',  '{rB+ 1qw&}|3?Xh0sFi)l(=3!ONH^z5,-ojzL;)n]%w:BiWTjZJ&9VA|D4q5C;U4');
define('LOGGED_IN_KEY',    '*&4+rv}^tur[iWn@R-2.-=y;.}7(5F&>;Go>>TI,Ti$d/8?AOCG]nWZL7|s(zES1');
define('NONCE_KEY',        '!/nGHg- QxO:H.*}?`+]?{XixWqOaSJFUn<<PqG`gc-W-oX*N@A,zU]@B^@? CRO');
define('AUTH_SALT',        '#rep490-{oSw{A@(&p`lY0Vu%<HqW@8;-S|F7jxqw~>fX4qn};n(]cR`jwuN7~R-');
define('SECURE_AUTH_SALT', 'yx;7TnqRzv3BH2a$<A:kWV^*sr2sj85r.FzGympK%<n.Ike))sG0[N4ZP}JC?=Br');
define('LOGGED_IN_SALT',   'd|vvB=sa@5AYbz?eCQ6VZ?kU|Bq9cGh?A?GCnesYEkCY=C&D`|9>nY0if{/br$!q');
define('NONCE_SALT',       'T)KfY/LrFs#g+bSM+VE6J}M0tS5$OcL,6 m?:,kY:c914,+APf&[/ky#TR`2&99Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
