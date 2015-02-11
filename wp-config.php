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
define('DB_NAME', 'wordpress-panier');

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
define('AUTH_KEY',         '_m63^nNbmL1st^dDli$pk,g4%mPyt?F+_iWRIDBCJ,/<}5|7+d4]z{#Aw5=qif)X');
define('SECURE_AUTH_KEY',  '5S:W$8[(R|zBshC0di%`gn zi{{vTZh[c_|[++rA]Z.0d+hEd+Ly{:k>%`A XG|3');
define('LOGGED_IN_KEY',    'Ep:9GkcbECW=W{+|`~AS1+/*[xLZ2F0F~a5Z^rW8N8Y|Kf}Ol[,`WlHW)1(w(`hW');
define('NONCE_KEY',        '-,~C>=eo)6&DJC9R6f?A,MC6:/TUeX-zkX5aG-X5!gM#_(!8aT&Q`@M1Z6)tLySL');
define('AUTH_SALT',        'Tgqpbtg,_A|-[.[ ^9Pg&v(1qtfr%c7Q)A3f3BqE:F/Z?G,U[8|[fc2.]v.L(bl2');
define('SECURE_AUTH_SALT', 'DA|ZZjp{h&BN1wC9^hrVXMqmy$=x,HOg(P[Q+]+IWEVzOP%-Rp+eFC,%3iPi:Gbo');
define('LOGGED_IN_SALT',   '~JrS7}vTsHZ,}4v+l1Qz[Oh<g0+7|Fep;21$K[96.ae02[uRm$M?FAKI=f!<2Q-.');
define('NONCE_SALT',       '*KcAvBPnrO-bI(W0UYTk-,rP,N@}Q!>(`FQ/|Srwe]|>uhL>~+YHm6,jUWK)cba;');

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
