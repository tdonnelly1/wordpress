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
define('DB_NAME', 'donnelly_wordpress');

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
define('AUTH_KEY',         '[6kkkU|<&0c<8J%{,BO: G?a$|IgP+VmRoz%9EX.A24BS2+H.0Pv5:>@K/:<Qv=z');
define('SECURE_AUTH_KEY',  'A+s_Jz$w]IW58S=1F[]A0*jb>_@DzvTa}bZF4$iSBme;9>Y`d<ej)sm$#{7z;*0M');
define('LOGGED_IN_KEY',    '$p+/cuc{s?~fzF[=yi{%}ZG-h)+b8M+#|4M-G;tCrJF}57qTu9k1n|Ti(-x~eLn=');
define('NONCE_KEY',        'c%L6)LkBRp2`F N+T(p&D5f|k036c.Wf<SygDA.*DdEI-M+Cvlz3hCr$Z(gu,$hC');
define('AUTH_SALT',        ':<a(RJH$rZ}2b3h(KRBm>|c`#=dcBl+ToO+n+KhVT*^yk7Ha1(c|7c0_<r+*X}ne');
define('SECURE_AUTH_SALT', 'mKg}+Cv:!QLDcyncFsZF6_+ZQLs;A_4#b=UGocKAD@F:]G9>(x}/mV|85&#7VLi@');
define('LOGGED_IN_SALT',   '32tYfh6{}^4#+i*)M:4*nw][K.<?OtDg4:hp|~EeIuh;80Ng&1z2Tg^>QBp>`K_q');
define('NONCE_SALT',       '%k4MYm8LVTK9%6fK~ywGB8L t`i#D,g)m#`10a]`DS*9M<:wMZ+6HrHQ|5U?,Crl');

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
