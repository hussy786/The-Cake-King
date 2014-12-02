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
define('DB_NAME', 'cakeking');

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
define('AUTH_KEY',         'U0#PB8gE *ug!8Z^/7Bp6Uww9mdNVlLt+UwwUjRX4LBF{^#ILf9o:EMJ`d%Hn 0?');
define('SECURE_AUTH_KEY',  '31^5;Ahu[MrpZ[Kg5?/?4I?HuMQ#a8|%@~FnCrcVI?51b[2eCqkY[^[h d)>T-Zw');
define('LOGGED_IN_KEY',    'IkVFJ9nOS{Ap?!WD|vYbQT^d}s:j(v[?^vsJg$FEt*106XUK&QJ64%Vc%g0%G-62');
define('NONCE_KEY',        ')Xw-m<g|;]!_zRYUW9ruK%5n$fC!1}pZ7gWJ*$Y2c|40I+>3_:9y//txML>I).Ly');
define('AUTH_SALT',        '/q_voX| N~IRZGWRU?6aQg<hZycof$vRncguG]w1BSvWu}0mP:[wfCv{jv`K=WA#');
define('SECURE_AUTH_SALT', 'vv}/qx0X%nmNX-.ysx?n/wU`W]BQu+E`Kj+dCl%ZiK+L#,V5eW[3]7.a0gh..rfP');
define('LOGGED_IN_SALT',   '46k_nmcBsF1w 3B-F(dJ_6|kJ )O=VU.Ss(8|Wc1P3|a+8$@}!8U:kpLNGIyWya.');
define('NONCE_SALT',       'Wi$d[8|dsp[,eu?cs{x c}CRT(-^^U+vi?w6NjlT56Cv8-/+:cE;E{&+Q!/l6zxJ');

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
