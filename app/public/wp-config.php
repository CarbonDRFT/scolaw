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
define( 'AUTH_KEY',          '4pc{ AodGpa+V=Hmlc`&$ Y/zjD):qO/a_&|+&v-APTZJkZ ~o`,MyfDdpk>3IU ' );
define( 'SECURE_AUTH_KEY',   'V9K(Q<;2/JHvOx/r:*4Tew3-bwn.`@^_uD/JgZSw1A4~*Fe:E;_Y.h>a(:`C)jkm' );
define( 'LOGGED_IN_KEY',     'h=U=NvRA2UXT[0gGN)Y|OJ9-W$34(Vw_m4*tZ>977HN1Li+c-H Wnx]->Y%eL7A#' );
define( 'NONCE_KEY',         '[-GolMG21P&P0b8`ULQI@hlai/QHJH**|!`eM%<.Yw%f?;ZQ>%}(r|4XaxyD+j&(' );
define( 'AUTH_SALT',         '-!K#hEw&i;E NT{`9N_,V}ihqCj}-vhw`ps]+f{RTt*zU=@|ZHR00%&YP${Y./_w' );
define( 'SECURE_AUTH_SALT',  'P1J>`3Z/R4<WLs$}K1~^Ws*8[[?9JL<y;gX`*ejyMC@*8yK_1]gF#?4;)SgZvPJL' );
define( 'LOGGED_IN_SALT',    '5p%qA~-@*,c79Sm@[h3FmTPLXei]?^7Nw3>,bhAVryA:JX0^9mODFj)SIebx+bQ{' );
define( 'NONCE_SALT',        ';9k{,)^3D *5Xoj[V9=&M-cWJ8uCpFLt EVw0UB_0&A;Vxl*iGiZ%0v{;f&N8TR9' );
define( 'WP_CACHE_KEY_SALT', 'hRor]M5ZbtHH~@AF|k<G[v)|pH^Z Zi1Q3WUKu[id4W o!&jdBj}T@eF:[VY-n.x' );


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
