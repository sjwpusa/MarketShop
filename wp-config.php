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
define( 'DB_NAME', 'db_market_shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rIHj7!]9/gH)o}*hm]W/zGt0#5+XQhwqvD3k8sZ.cxt#<k$T% MZ!Dh%&u.B?t4[' );
define( 'SECURE_AUTH_KEY',  '_]9c>60lj,$cJNPqMsn1QGFXBjyNv_&xb&EC9s7O:y Xyee;5{zU-D~L8tW`G4F,' );
define( 'LOGGED_IN_KEY',    '.4APXdO*A`8!/_MmObLOlFuTdg/MP[{Ygf}EoFWK jwcX!}RGYGhV5Wf,`.V]B`f' );
define( 'NONCE_KEY',        'eL.k)~Y{~4#TOFyhL{P:2_P_b4NUb|0N=8A#!aS[hWl08pCquHh9LEp4.OXoCbs>' );
define( 'AUTH_SALT',        'Sg(si)%o*38Ma1U6r4s6~v.~bJ=</E[?O^&wpYupSkV*2#&?67SwC95zKd;uDbs8' );
define( 'SECURE_AUTH_SALT', '(7z9cLG58PA%Xv>:ut~^ ;q6Ku =A?!q5li58~}xW[~aWb7bK!*i5SqUBxKC%H<s' );
define( 'LOGGED_IN_SALT',   '{TZPuz33G(J,B%r;u]-HB~?^G7NRo+Qz&00:yLc 38=Akm><;QzrZQh`ivp8`fDu' );
define( 'NONCE_SALT',       'y]J,`RS oMNSedfm<x|d#-R|3>tU4~0{Ca4Chgm6`$it5tH|YR}!5}Qc*;k_/MS%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpms_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
