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
define( 'DB_NAME', 'websiteofficial' );

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
define( 'AUTH_KEY',         'ZAunzk;Ho)C~H0yEyWP;j|H*|U#<]nbc7f^}w,Jb& v3m.kuKdp=@D/]UndEK*%&' );
define( 'SECURE_AUTH_KEY',  ')qjIObsT`*!$DXY1Y4sg8~wetG{jR1]<0v=i9}^q|$UJ]N@oQZ??IB_KEK,b2^l5' );
define( 'LOGGED_IN_KEY',    '2;zH@`@`bSuW$2, J3 k%o2}=0q}oG$YdMb6_0f3iOp,KzFm;#v|j#L;)UY?D,=c' );
define( 'NONCE_KEY',        '/bPS4j[mW8z3+>`9yrUlWT3#JxiP-l Oq8etkss^q$*U6?B}3WOBz2Hsx!Ik{Lz!' );
define( 'AUTH_SALT',        'd>fiT>W^)Za:j7eMnp#T:DSx7G8_&O/=*LpHbnMw8aT7!=4XFt9[-Ns=n@pHa|(}' );
define( 'SECURE_AUTH_SALT', 'eAEub+bGOW? u>aKEvyW.Z2C20p($w$|)zkn8+2VOb*iEUAp<1.P|fWXIvstdvLr' );
define( 'LOGGED_IN_SALT',   'aSi6i+sP+(dyW3D$*JZ1*v5B-cR]VM88Q<rcJ}0ZfWwHKXDHS*D2=iz|2RYq2e:6' );
define( 'NONCE_SALT',       'wXr)i^7u-;L7q8]B~$X=YAJ+r<T$fX`iVWc /^IF$-Ux&t2GOrEGs|_w,NH)@=}[' );

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
