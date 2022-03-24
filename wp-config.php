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
define( 'DB_NAME', 'prueba_elabsconsulting' );

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
define( 'AUTH_KEY',         '=tnA3fKu#qFd9e9F+MJl$ .<m{;|ywPEnRr7.bvvgU{=h$&(g~&(e42:ThSkb.WS' );
define( 'SECURE_AUTH_KEY',  'sT1BL/8[T!kA#ox2L/CxV! +7TH;0s|2xf/koH Hc!p3?ua8%%/b)MZ<}JXQSwKd' );
define( 'LOGGED_IN_KEY',    'uT+[%bF(/1*ypEk[nJ5F!!%VbB$E<{Zmc_<ogV;yriC%`0.i]3It$ pUsSD>_8G~' );
define( 'NONCE_KEY',        ';*aZnMezH4hY-96_I)Z:W_/Zxe{[bA!qThy#jlA9pN:t]:+G`YwmBx1zdA)$gt +' );
define( 'AUTH_SALT',        '|&!CY^@+<5+fjG<~N4!gdfbu?=j!K6+#tLI;E`})Roj{^KL39B]j%mHv3VV96w@E' );
define( 'SECURE_AUTH_SALT', '/z 6u|1L*9H<LDK-~`0NtJ2?o^#1Z@kDeR3T-6X2(#gO@y~6(A9TIvG}0&3(,bjP' );
define( 'LOGGED_IN_SALT',   '#kn@/C`2sX>;9 R0=nR3e,f;A_|[VDyE>QJ{!PC/Z|%E`/7BX|/@@`D.[H@Dpbr+' );
define( 'NONCE_SALT',       'DxCv*k7T9{@tfe}fCFk-MjZGQt5u[r,fj0;AX5l`>+w8u4oNSHXd?F52e$:wZB+t' );

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
