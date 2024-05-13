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
define( 'DB_NAME', 'blogtkha' );

/** Database username */
define( 'DB_USER', 'blogtkha' );

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
define( 'AUTH_KEY',         '8W%$X[G=5vI0h*7?}Ov!!a;d#?i^,)xSeFN-us}to)It`1y&P<-L!akTSh$-)2$G' );
define( 'SECURE_AUTH_KEY',  'WFR)77b>4=n $Tf#N[{]b7[-n21DH*nF>!J9vf++Y4oiW12$mrq+1biJG*Mf5}r(' );
define( 'LOGGED_IN_KEY',    'x3{?3kckmSs|FXZQYF$8PIe%.~k?id-#E;&<KDi;_<)mEHB?_mRUG#yqVZAyzyho' );
define( 'NONCE_KEY',        'c)^6h$X[%[$_(o;D0su{@j++a^cT[Uk}D:n#T^VSHe/vO>no?tw=g|L{1Pjd,RTL' );
define( 'AUTH_SALT',        'vdgo@c6mZ-6`iW!1j^dJOMce}R*+(3MCpFe9L`BQ )0TB5n{ 2N#)=hfv*o*x jA' );
define( 'SECURE_AUTH_SALT', 'mP|{Baz;Ueayp!H<nN!gVea=^^Dj&-Z~54l5pJvkcw+z%DZ|tfn=8]ws{)RU[z&)' );
define( 'LOGGED_IN_SALT',   'GYX?Oh;>-8]hadCrO08cbV!M}UA?;`MP:k2W~tvG#k!2Y.|5.5&D`Wpn]UTt{rUJ' );
define( 'NONCE_SALT',       '_0;Y(6U<!K|;,j+IO?GMlRIrKI]w$H$:wI9v$HW^zg[`N9V1a7Y3;SXC_o( h=Cr' );

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
