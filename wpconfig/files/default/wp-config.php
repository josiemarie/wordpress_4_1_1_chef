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

define('WP_REDIS_HOST', '');
 
define('WP_HOME','');
define('WP_SITEURL','');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'SUeeorNpDe.^Yb)-wZE=f8hd}3l{#[K0g$H3ir5JG[{ZGg3_*(|,*J_u;.%1AhX5');
define('SECURE_AUTH_KEY',  '+A-t_aJ?k.T9yvsBKxU;J|AN6^uOG0%I#IObM$Uc/[SnH*2~cl,<|H-6lh4RJ1[u');
define('LOGGED_IN_KEY',    '7yEQggEfK!t99GbKj{Co,&V4YB?Z|mT#$7m=dz}g@WWZM+/rCAm#5{kj-{dAM_c]');
define('NONCE_KEY',        '>zbrNUN,3O]WQ~}A(MUdBU-ria5l1y7eD%5k~MHdMrUx&I6w]P!/D;t2e@,G]3 l');
define('AUTH_SALT',        '[&}Udb^V1mi}A.QiVv8Hmvq>;=k-Y8jA w|-u*}YNkubK4.sWc(v-JJQtE*+hZAQ');
define('SECURE_AUTH_SALT', '><@gU9s-9bz/~_PNZ~v|.6]uT5}u+0[S/^(/[Wam7|a~|j>5ER:kV{{T]`rfAcDB');
define('LOGGED_IN_SALT',   'H##<-rAi!|I8mjk<H`%wn?)?jn4g~H wh5C,>ZR.xhSpuMuf),hX~W]Fk&x-QQ[q');
define('NONCE_SALT',       '{`f:>yO`__Wu>W.WYhRbmRAw#Y6a5?cbaY5q+z,$(-ZDBEs;9eo$.EA|`Ia2h4Os');

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
