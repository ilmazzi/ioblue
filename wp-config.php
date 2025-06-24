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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'e(Rc.{z2GyC|=i1,9q6qq(X~o-dq|&vEs3I8V_g59F7Y?mtA??_8eDlXmr3},mDA' );
define( 'SECURE_AUTH_KEY',   '1E6c1mkX2~|3DMzf~,ZxN2`[<#1qb7 M%AIhm`M^M 2EK8SF8nOyKDSW&QAn}#{.' );
define( 'LOGGED_IN_KEY',     '9PAzhM|V4z[0yM_z:.G~y*(f{mTpY{0Jf$RSPC?= ={N>noyX?aS6HioR#57$XcK' );
define( 'NONCE_KEY',         'xEG((6D,*j-(6I@V<jy$7)9/N b@Dpp0z+&EegqHRzzC}itPy.6a(F|u)A}U{~Jr' );
define( 'AUTH_SALT',         '{Ec8Ur<>0s{L*g8+4cTTRrK0ejyxv8=Ag$O^ks(Tv$}-)XtPU]>j2S5hMEV-)o0W' );
define( 'SECURE_AUTH_SALT',  'MrUB@~B.xTx/IA YvJaTo.|qb3xLM`/)Xiy+S]X1a(7t;OzwrB@-kzk6Q)#oqj8V' );
define( 'LOGGED_IN_SALT',    'w2CF~HJb4+Hy{`|7pbK>UG=(f*Q$nAH9t{4sq-|%|>Iru {4i{n_xM;`*NKTV]iq' );
define( 'NONCE_SALT',        'PCQihb/T5R{y^<7%I@d<qDK>%w@N`1[ QR>URGhTsl5FK KgQgD-%@u`9VH+N#IA' );
define( 'WP_CACHE_KEY_SALT', '4eDgpFA|rHEr#sGXnxUOBmG1xbkIFP.+WdI>2Io F~wclL2;ko_rkE=-I;+yB4;S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
