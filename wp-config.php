<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Wordpress3' );

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
define( 'AUTH_KEY',         'XJ}afI~&:QN!mc`qig9*Wc>Dh]C5p.7C$/8;cepX`lwmOT.hCXwp7JoW;sbUY{a[' );
define( 'SECURE_AUTH_KEY',  'KY)L+_0Lh`Go1QBblwu[&qMeU)$?b9.zx>T6nJ9K}S?S@_x$Gr0TJzsXoRyGIt0Z' );
define( 'LOGGED_IN_KEY',    'N0=ARW#5#1Kq~gyH&(FgFgjB=#4Q?&AkD Ljc-C4PP;g*)s7,:)6hJYVH%>M[;.]' );
define( 'NONCE_KEY',        'c2/S_w{DZW>_b|D4QGa<:*f|EK&>AN>-6c0Y!g6 /_h5QZ7nSrk.RdDUZf*n{W~Z' );
define( 'AUTH_SALT',        '>=:LcR`upOYqX45&@CNEZWn=j|SAqR._|>p(s-1.Humj,^4U@C ;W]QgBNl3|f@e' );
define( 'SECURE_AUTH_SALT', 'rvO*8]hi$ira/`BzF[#t@BV}S|IzuDbg0n(9fId#J9I0i5L0!mP_%86E+,:w`au%' );
define( 'LOGGED_IN_SALT',   '@/@quMxSpfk(+d,d?A~vqLTeef0?`8I6Fy%mE.*#3>y!BcIs:j(PIB.de.rKK4!1' );
define( 'NONCE_SALT',       'DuXJMRepy<uWDkBUzh73Nvp5UFk#$.6Fc`J&,-G~:dA)[yg$JX0j=q#,l^$qK7HS' );

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
