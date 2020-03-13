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
define( 'DB_NAME', 'pxd' );

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
define( 'AUTH_KEY',         'qZ63ZWulw><$52U3,wOs/]q1HzHf{3B!~E34=3l:}cHskR&^((CR!ci9n0+~ts@&' );
define( 'SECURE_AUTH_KEY',  '8tPa^=8tzs}3cKRRZ;Hlyh;6(+=o+b{uV`n;@K&/HWXw*)l6 ph}IQD=-&F7p=cW' );
define( 'LOGGED_IN_KEY',    'T4q4yu(Jk]8HaEr+,uyx4.mM-qy&5]h7wss*U0b|xgtu:Df7<m6OomQ+P#lAVi3v' );
define( 'NONCE_KEY',        '1C~)|B0UU0$_=bU}RF80#T.>^>SJZp_8:R}W[(XHdZO/]TJW<,hoa0()>huiTOX8' );
define( 'AUTH_SALT',        'G)4o+%8_G{{1!$dEkN~u((:_C5@Nn_0k3B-4hijJ5;0<UTeq&r66!)p.zte^dMMS' );
define( 'SECURE_AUTH_SALT', 'M}oX?>{@~{^Rh5WM{[e&n*O$jkmLDC#n[rfvw>|(D4^<k%C`~0|h}pr+Nz0-!dhu' );
define( 'LOGGED_IN_SALT',   'dg srye<Mq3#L{=e:YCR.)B>J2op(0GsR5X_)>g?QlI)zkrL?mMa1L#AS:*DBr]_' );
define( 'NONCE_SALT',       '16j_nE6R?iSZ .yl_1M+)@$;9]vGp3.=,[#Ll.#?N0,`rnsj-M2A@>ZMngR:YMc{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
@ini_set('upload_max_size' , '256M' );

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
define( 'WP_DEBUG', true );
 define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
/*
define('WP_HOME', 'localhost/pxd/');
define('WP_SITEURL','localhost/pxd/');*/