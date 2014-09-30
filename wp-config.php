<?php
/** Enable W3 Total Cache */
define('WP_CACHE', false); // Added by W3 Total Cache
define('DISABLE_CACHE', true);
if ( isset( $_SERVER[ "HTTP_X_FORWARDED_FOR" ] ) ) {
	$_SERVER[ 'REMOTE_ADDR' ] = $_SERVER[ "HTTP_X_FORWARDED_FOR" ];
}
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
define('DB_NAME', 'twentywp');

/** MySQL database username */
define('DB_USER', 'twenty');

/** MySQL database password */
define('DB_PASSWORD', 'twenty');

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
define('AUTH_KEY',         'Tyko3|-Y&Bb|hp@c{Zd~}Rcl9Ymyv0);stL}fq>(!];q;RX8|;*3bmHSFN)2L`oD');
define('SECURE_AUTH_KEY',  '>bAN{$&4AyK3Pv]|,KAeVlg_CF6qjo5].>G4P|Guz</)bL_3Z2?Y2081RL+kg/|+');
define('LOGGED_IN_KEY',    'L:s*d%BzSU1u-RUd6UKHc-7vuA.7tW-)AsMR+v~6Z(QshWXYrMzZu6h3Nz rPHEM');
define('NONCE_KEY',        '.GwC$9$qY)@ys`0mb]Xkun-&JcI0|D|@nJcC#?pf[;;+=+>0+A7tC9-.d1h8!rQc');
define('AUTH_SALT',        '%eni3*W+(=4-%Q?oRkI0gLMSG.f`7b7-o+xJFadr-]$$x*t,<ZDC^XvvOuo|B|:d');
define('SECURE_AUTH_SALT', '+#B%aL#~=hhwM9PQ=l<P5B&kHlM<,o;E<xn3[wp|SqbKLFny3$8+l;ey1_4Vb3%5');
define('LOGGED_IN_SALT',   ']D!},E_LxHmDWf&JHp9SX+??W:X:@;^k$gmDjJ0n.{Tg@{WE(;Wq!L#Cg$/dC9w]');
define('NONCE_SALT',       'z|n74FnWpo4wtO=z?I-f[roCn6:u[E}_#[CQM|)-S*zv:UBRsil%-@|Y+hW}onLz');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
