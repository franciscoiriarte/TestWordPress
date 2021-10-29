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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'J?.hcVw~f%4i+7K@~ T}A?%RojzYM?HO1s[h}NW0,*}A*TqxQy7G@jA8dIs7tfd3' );
define( 'SECURE_AUTH_KEY',  '2!B [^vaWXm|-t{kJ#1@xPgaerH,b~<F<7;{TU4YBjDbma7n~NfgcW~cTS^R=A*Z' );
define( 'LOGGED_IN_KEY',    '*Id(uF(B9qYV+c6a[G[!!9Mp~MsNdsBz@uS(mrO(EW$ vxK-&w+MRsrv-WV!&C.N' );
define( 'NONCE_KEY',        'Q>&aS>23!87s_V%HM^f1|Fe6i]-X*Rg~Y|[/+]R>SPK1w921 ecNHBYm-uIw]8xm' );
define( 'AUTH_SALT',        'Z hD+&2<rKr`ZoPaq>gy;FKFi]ub}T[x`>HzdUG6[PIU~~WECe2#{QTJjzqu1c5+' );
define( 'SECURE_AUTH_SALT', 'ijvBpR!sckj#:{_-57*4r@$^wKy~cl;_J/%Hz4YN):n7^7J9kW=@sN979elc8rs;' );
define( 'LOGGED_IN_SALT',   'e*B2m~Bd%1bK6XB+XoB<U}TGucDGPEwHH*c)$Su_cV7BCZ_hjx:eU;hhYzK~[f#0' );
define( 'NONCE_SALT',       'kP2u7htc-QP!@69qz1:OsOUcDE$+h6ho7ZZ0Bal)NLI[S`tGblU[*FG1Mi84lG<Q' );

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
