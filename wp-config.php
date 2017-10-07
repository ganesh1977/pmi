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


define('DB_NAME', 'iwesol_pmi1');

/** MySQL database username */
define('DB_USER', 'iwesol_myuk');

/** MySQL database password */
define('DB_PASSWORD', 'myuk123$');

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
define('AUTH_KEY',         'Z&np9qv*%fuhTDn>]Q0yjj @s^X5tL5p>>>J*A]~B`Z:;Biz*jC;RhT!V<G?6D.]');
define('SECURE_AUTH_KEY',  '8~gN(<]CHwMS[DJ]T[1@uY9ktxl>=8lu/#U+]<L@j=X^R]+MF_MYAr0%Qa:ZkPy0');
define('LOGGED_IN_KEY',    'I]aTQ/i9^->oA:8._VBFR-bR:LqF`:A3rLT`1m;j#gl=9P%KD6[a&Y%j@IYHi~{_');
define('NONCE_KEY',        '#C=[;0<Q8~zb=N9.Uz[Oceq4/m$kxZS3(&&=Z;b=4kjXo_RX2PTr|jb.ylI5$[a;');
define('AUTH_SALT',        'qy@-]rqr?>koZB=9]Tr|I{Sp{;V7]1IL3-x;M0E@PcDXY7X0G;E{*K&zA)/3GqBE');
define('SECURE_AUTH_SALT', 'u=~sr&=(IxcFB/#mOV3&Q][@#x@ L%1qrI*_=RCs0-X+`8P{l GqE%*5Q}&;GA+%');
define('LOGGED_IN_SALT',   '^V-~-Xi+<tZU1WHe?_Lx)pa,Poy~MANq:Ntva8l)kQO!Am}G:Pmudf:&!REFs4Z ');
define('NONCE_SALT',       '&N B@CGC`Kg=>v8!Vth2dz;h>&TG=.@4/rwKZ2LH|4!9}/B2~LVk[0K3sBrFma{W');

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
