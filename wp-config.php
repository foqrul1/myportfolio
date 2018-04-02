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
define('DB_NAME', 'hello');

/** MySQL database username */
define('DB_USER', 'foqrul');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '2qbsNXLb4zvkZn+J] `~[Rm0_$$J;(+[L6OYor9d)TFQi/HzEnN gm4^+@E[$ews');
define('SECURE_AUTH_KEY',  'gfKDRD+&P+u2Ec=l,Essj+UKR[,3}0!9o(<PW`84r.}54D7xf;UJVSO+0S@:%C=!');
define('LOGGED_IN_KEY',    '1+#We:=%pYwyt.EKr$IWWC#.)`$.CC9ky!T+A=7rW`#x?*|uy1(7lh1L>Lsvq@iW');
define('NONCE_KEY',        '+[9zqUX%(H`][XVe:Vc{qIWk9M6Y@i!:|G2/V;3*ZR$A53? 5S?#@/:ob=Z6r85h');
define('AUTH_SALT',        '{uDi$e-grLWxflHZNY?m;q2+DvQ}@&H=pQo:3e4(m^KWH{8VzEPV<0Bt7sg06&|;');
define('SECURE_AUTH_SALT', '@gt}^q4thF[;*gB}Sxq&J(Op[gqBApeYYW],?zZ[dRnKD!ZPzPQZRf>do!S1)T0n');
define('LOGGED_IN_SALT',   'v1dq;Gag3wH3kwbD2Dc-hGPAd?QEE!*P.hq^cs{5ywB:`tkN][DJ<Rw@K2d.k,xT');
define('NONCE_SALT',       'prw,gNu1Ea0n21/!}jCf7b7,T H?9a|e;H<{D, mD|gb==E/@n+WN,pEn&[|CyL~');

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
