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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+k$LkHeFRJ2[GudI!@wXR0.+L]FD Yg5`$=sS>pxX9(Nrj>>IVBrSKPcZxNfImE`' );
define( 'SECURE_AUTH_KEY',  'mwxruXT<{4R4U)*eWacF`0]<vb_oF&q&V>:HQGo!=(l15W[y)#V*_GcT-Qg=.YLK' );
define( 'LOGGED_IN_KEY',    'lgW74LTMLkUUrNKPh%K31Z*8cd?H`$wKV]ul`LFfBKoJ=K,_$9|UnWkyZI}0*QqM' );
define( 'NONCE_KEY',        'Om=vcsynDY^DfYxbKq(<dprJ:vKD:RJwF3s^DAa`w/^9^PtX?l=zu_i3:]w8e&:k' );
define( 'AUTH_SALT',        'j.(M[(u5Im=vy wac]B0J{Ozcs SA=1re`N(:>Z=ru0fd<Bu{P`bgw_U!sTD|2YF' );
define( 'SECURE_AUTH_SALT', 'Nnzh3<v_4TR1,CWa`!Ejr!c1Uxq|LVYT!.3Ow{9|1<tOb&1T`Fan_iNrsD;!D7l)' );
define( 'LOGGED_IN_SALT',   'Yy*Lhq{-AhKuU,-uR@KcA7Sb?e%B!Ty <n}!s/38o+UDQ%l-zi_a< EM-h` tL-:' );
define( 'NONCE_SALT',       'XDReVTb//B)u,:$[]{h%1d,<lsA~MhO$`JQeO0}`,VKADo X$d593.t,]a>n6mHJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
