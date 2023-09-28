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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hospital' );

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
define( 'AUTH_KEY',         '~ek;BHwL7tw&, 9Qzes2^EC vJc^ag<n_*&TMPQKuR5)_ep4hk*4iaSK0g/{xU-j' );
define( 'SECURE_AUTH_KEY',  'E3b;3-dKt{5`W<x6(-K$XUH8C{vEJ|lL%]3%).|*V;2/5oNWK vU`=oymYuz2y4;' );
define( 'LOGGED_IN_KEY',    '9JD>~@= +XzC-L8#RP1=z<jdqlRO{fG{/WvFofqm7 Ji*c{V`lzZ&U42;L?[Jgs%' );
define( 'NONCE_KEY',        'j4Iq3rk7815;shT1^o3)uvE,tc@D RNAx{~QI~`54UY$F`)/U$pnmp (=W!}vYyK' );
define( 'AUTH_SALT',        '+U1>[Mb[r@|=w,O;[Ms8ykd2n]?a})}eu=&WbIK3jzA-FcV/1]#&`V4>mu]&*{)?' );
define( 'SECURE_AUTH_SALT', 'cCUaW1L0_[EE!mfhbJpyE]-5PsS.aTm Bd{}koRF,G#^} q-b0colgI{KkO!L>22' );
define( 'LOGGED_IN_SALT',   ']JFomYM#`O<,(f:(ul(V7rX+-P+/k|Q6AvP[L4]8u&XdW&mA=5fKeMeNN5A#d4Ws' );
define( 'NONCE_SALT',       '#/v/^I?QgvSMFR,O)iCt0bHwfY-<,ht<!DN2$9#%s=/zK5yB~/?R`XX~=zF{%^BB' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
