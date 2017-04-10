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
define('DB_NAME', 'superbi9_sms_database');

/** MySQL database username */
define('DB_USER', 'superbi9_jhc');

/** MySQL database password */
define('DB_PASSWORD', 'Password123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8_general_ci');

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
define('AUTH_KEY',         'm5`H!VDe]ED!0{ jb@|4p+zeHO7>sM|Zix6V?6TA9( e3ufv-kC^V2:t5xTeT]Kv');
define('SECURE_AUTH_KEY',  '&b2{bT?`MAWJ&(kS^[YUo,!H4P[m<fWhY*Fzjc65ra5IyBCg@wf~K<(K{AiIWSK)');
define('LOGGED_IN_KEY',    '%*F+NZ+%:b60|f/O@0g((%h}=W;zx!NU19{JCe9Mq]j]SGIm(pnq8IY@Aw_7[qHM');
define('NONCE_KEY',        's=Ra?TdV}Y_t=RQq5]gqUz|wh7*uXP/G3zWNZXyd$IH-Y,x p|Ds%OHGL3R$j-4:');
define('AUTH_SALT',        '5fr6;%]Hqlk7q2<Z<Qydl_Fi{5zon8~T1TjzWO.a1v4pp92<9M!Hb_Pl^ds*,IK|');
define('SECURE_AUTH_SALT', '/!][wpGVBNXu^rl/B+tiNp`AF?mL<upRJ4O/:[2V4sHaIG9W`w?9vc;V3_n>0=_1');
define('LOGGED_IN_SALT',   'BF$*%r$JuL7qEz+~x<0er<_>QupxJlJ.y+MHxD1F&]@|KLS-^>a!o},(MJ2;Z[,(');
define('NONCE_SALT',       'fO2B#d yeKe8$bepo -C)):+3ka&cOD.8j5|QiK9l!RB~K466sb1PKNC[dC^{T,j');

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
