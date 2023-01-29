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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         'hBOl]+Ei$z);@<T_c&elBdBY&5oX|cBy,p@7]jIw0(6&^#+dfe#^!ae%P}Yyt~{f' );
define( 'SECURE_AUTH_KEY',  'ZsK(#2_-T]}n*w=.ffK5A=N4ohCPfWz)<`V+bwSG*V{@|t&4@ymTEJ q1=>]G&B*' );
define( 'LOGGED_IN_KEY',    'yVdxPq)r:s+ev/z8@aV+JY5N5gOp<7sG]*l=&kd.ISuT3I^U-Lm^xx{oJ |Cuo4}' );
define( 'NONCE_KEY',        'N*M5>vtR-<qX9([P,vhih0j(({K4~g%w+IR@MiXL>1VE}EqP&Yi}-F}6-2)9MKpB' );
define( 'AUTH_SALT',        'kj%WA1Moflz7RQwlLrct|GPb[z(.Cdq57J?~k2nMg4XlSP}@Uq4 ~R$[|d!@1DI+' );
define( 'SECURE_AUTH_SALT', 'A*NzTE;84l9Q%&N/[`-=ESGF6%+qjqxl@,n<iB5|H=x-Z`Ed`p#7lcL&:o:IcE7v' );
define( 'LOGGED_IN_SALT',   '3RaaxTMmrPn2i]72F+KJvGOq|R4u=Rd$ypNF 7XwO/Td.cYYqj1LR;9-{f}7`qaq' );
define( 'NONCE_SALT',       ')P_X@q!_nUgDif5(nms8{dps8y;8>v/`5BQ}3<b02S|R=h.!iVfrP9Tv~pU.*r[)' );

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
