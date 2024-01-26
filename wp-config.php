<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user1' );

/** Database password */
define( 'DB_PASSWORD', 'LsW4*kLsW4*k' );

/** Database hostname */
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
define( 'AUTH_KEY',         'lC(Ryz*`S}.--#wJA5NEvmEfMm&!;F8g{}KmhV)5*KXRy*^ /+t.Ea[8!+P7{NkR' );
define( 'SECURE_AUTH_KEY',  'J^|oOlJuAj.YtvGB}3Y[|U/]<G>btk*unI8*)OD+)c[995#RuFEsA_7<JUcwWP,O' );
define( 'LOGGED_IN_KEY',    'H|GuB9nS_^V7L_4QS&:-A6v*0<[(tSd2p0v5:bRw.a2msY>kQ1Hn}GgGCnvaf:z}' );
define( 'NONCE_KEY',        'y2L|f*tZ1XNH}CI9S]m>xG$V{+BCNWO^DF,M?K0=(R`4,9w8 iwZ+Mk~OmJ}i!$]' );
define( 'AUTH_SALT',        'Y[)+)D^$/fHL-5(@=$d}A}_4,IdU0^`p$*5k./E!T*,p<,R[qDi(u^>^l{_Zq(#M' );
define( 'SECURE_AUTH_SALT', 'WMvhrFoHF[)ij-s9Ut!`S}1w*<d2bk@+6|YyhSuktL~v$-mxey1lBCK,ix?oaQ)#' );
define( 'LOGGED_IN_SALT',   'Qf7l7>R;7J&k||-CEfkb|PZNPhqA(>cB$-3PK:FjIXD`XSNcJ1KIk,?M@]EwRv(M' );
define( 'NONCE_SALT',       'J${}uwkqJ+YF=TSjUdF%y>agXJ$_-LYQc<>Q~5L:@l5!`dT)mB*!thWf%OylI#:[' );


define('FS_METHOD', 'direct'); /**
define('FTP_BASE', '/var/www/html/wordpress');
define('FTP_CONTENT_DIR', '/var/www/html/wordpress/wp-content/');
define('FTP_PLUGIN_DIR ', '/var/www/html/wordpress/wp-content/plugins/');
define('FTP_PUBKEY', '/var/www/.ssh/id_rsa.pub');
define('FTP_PRIKEY', '/var/www/.ssh/id_rsa');
define('FTP_USER', 'www-data');
define('FTP_PASS', 'LsW4*kLsW4*k');
define('FTP_HOST', 'localhost:50519');
*/

/**
define('FS_METHOD', 'direct');
*/
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */

/**
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
*/

/** WP-CRON */
define('WP_CRON_LOCK_TIMEOUT', 10);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
