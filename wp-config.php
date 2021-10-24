<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'droopelmasaken' );

/** MySQL database username */
define( 'DB_USER', 'droopElmasaken' );

/** MySQL database password */
define( 'DB_PASSWORD', ')zisWnOSP)8Vv6Xq' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q~>NuHo7Tk64-.]}+XSqx~GAl Je9cWUC4Yw-aLn`*>j,t}WLFfG[ZR(+]1EIG$y');
define('SECURE_AUTH_KEY',  '2-kl:T5xgp#aejh;7/1Tp-CPy^KAp$t8?s,>NX+a72cQRru ki]rS(3Lt:}ytz2(');
define('LOGGED_IN_KEY',    'xfsgO>/RsLa=v+.UuL3Zj9DU<fsk)i8/B2Gw&ya`xEO-hs>h<++Kj!aw-tc=QCY}');
define('NONCE_KEY',        'm?-ph>Wz`nDi5#qE-nonp~XI,s}H2WDaXn[}ZRt4I/+E5|b[.g%7`|+?-S^XI$e.');
define('AUTH_SALT',        'yBBjl@=kNbEa|W/gDBk-|@H;?R*;)l}~HZpk?]?}kpaBX104:%O:W`o^Xc~IyUSu');
define('SECURE_AUTH_SALT', '|mDmh*_Wv/HQ)E/P_~Nt{)PcKef_*f@X$,q+(HDQi @NHPf`wKGH7;HkyCV+.lbI');
define('LOGGED_IN_SALT',   'T9+m-0lNZ?7YC3tsKPbsm]7Cyut=|{_Y9MMv==$6:tRxebSPpEU,!N4(D|.n8X|+');
define('NONCE_SALT',       '%WnBJT4#K-|vvzIx&Y3.ls7Z}=|O)J*W|A8?:U&,FS&uJIA;HLW_0!o:k..0J,E|');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tpv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
