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
define('DB_NAME', 'ecom_rest');

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
define('AUTH_KEY',         'y^^?-d/3Kj 5Fh`gR6w7BrR*vY3c;J@OsUumQZ!ARy71e-)s/lLy:lUD&xJ&kYGm');
define('SECURE_AUTH_KEY',  '-j=Qyaz,<tV64v]K_796=vwS^y6xO~k0(8K!6TLuxa||m#`&]F{UXU;Ph>){sG5.');
define('LOGGED_IN_KEY',    '4grKh4egzcw&vhk(Zep![o=%jdG*lWIb0zS6qHlqK8|DsKa:8kJkLp$.;W5ZU0 v');
define('NONCE_KEY',        '!;=OCdJE{G8/t2{<Hra=od;t0thPPk>+Imkr^T[&80/zY=Iwpvn{$#BzW6/l5Sv9');
define('AUTH_SALT',        ']dCj}X)0Ii;1O8/3!Y!+nbw^^<D3;M}>Vk{&)MN^c]~?auBsO[q[X{2[vIQ`-ABH');
define('SECURE_AUTH_SALT', 'E}~ j[N&Ya=miT[/]tB9%Q>Z#RD` UvGdo3oO&Z%ETP9PUe9@Q8?J.@]Mw~^+glR');
define('LOGGED_IN_SALT',   '?mBv*<R4F]ZV&|UUQrF7g!uc<1yhoWuHP:$ZQ)dN/;}M:.9wCXz.#4Uvdrk%1L[=');
define('NONCE_SALT',       'Iz*}!$k~i RU#<diddW<W~8a}Hn}I;4#^w~d_3WlRrB*-Ca%5G)zSfT*d`n$ EKF');

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
