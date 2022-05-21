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
define( 'AUTH_KEY',         '>dKD7cu5)$9>ba^2K*)|ZLkt},4]mQ/=tV(>K3fudDwnAlUZY}c(!`9l]Hx#TRET' );
define( 'SECURE_AUTH_KEY',  'aK1#-bN>v?51piw~68QHahUw:G,:Ihny}[`_pg Y[!=!!+feES7_@l(scUPy1c#%' );
define( 'LOGGED_IN_KEY',    '$fK%FTS7iRSNB6s*zI(PJG>3*]yBiYNPFb3{5+FR#2bIxo`KK_yD9 Q+ $K+rB%z' );
define( 'NONCE_KEY',        's>Nu3enO9;-<<4LC3~OU:g~^yIUSE?Cf:zd,sV9Rj<cyq5hyeAe*Fmp*(G^/hS,J' );
define( 'AUTH_SALT',        'Y&ce<yjPT&=<OS^VYA>RXq,rEVm&jh34DEIJmnN?{:zu#}9R*8g@5#qgRmhK&5(*' );
define( 'SECURE_AUTH_SALT', '8mp8wS;O94[kC#l-AI1glb}O7P:m.TYjCCdUo*7%?:o)`3H5?*U+PmgChA|k3B[}' );
define( 'LOGGED_IN_SALT',   'CgU^e:Zn?b=`5iOC=|R($NIT_Im$np|/.X=DIm!Ibra?5R1L[6+>Y[Vs<]:)fi^4' );
define( 'NONCE_SALT',       '3kuqzGK}oGLn0BCp0SSKaB`)Ns_J+TCMS]JVtmqeyt5MTV1y@aU1$kU4Y4{LCt>5' );

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
