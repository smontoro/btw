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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '5HWT7bPZfpzZSfxe');

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
define('AUTH_KEY',         'O3=&Cx!/;QtWk}HonbWyA+S?MQ68?a<$rD|2Dls:Sl-<t{+flp,6PRJ5)/pJ2MJQ');
define('SECURE_AUTH_KEY',  '2y,L4n2t+|k1j`LEp7?V6B!7+21IE_{(L{ynZ<-VNR`5%>NJ{84 ySXk7Bq)ZUtX');
define('LOGGED_IN_KEY',    '!QGQ$0Pf~` >qi|8e}OnRmXa8olfYNsqDyY`HAzkw4EinqsGVyAY|TyA(fQcVK(v');
define('NONCE_KEY',        'MupkCZLBsF_K#>#>>pC<(W;?J.M|?-IR ux:,<{F?8[DM1HyuDLmR:?X4MNyy01Y');
define('AUTH_SALT',        'O,E&K0[iLb~[)bL+P-p1!|iM,{Fzgh|Q[wKu7+N|8pe$mEs(9yLG_%g)@+daH$JK');
define('SECURE_AUTH_SALT', 'Mwe0HVa.![I-)v4.b4wDB0K7_1S[9{G^R#&%&<2Jzm85|FkA$`q3GIX53THPW-F3');
define('LOGGED_IN_SALT',   'n<?*vyk|6|eCm|5u{<JC[4:`-^iL>psy<nPeKh}I)],q,eHv iz:,hiS.C3l;r<*');
define('NONCE_SALT',       '7y@ORLIw|vFAe&_kDbkaU-}G3Rbh|:`x/nZSAvPpHN.)T<0=R#?>m&I/voP=I+!]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
