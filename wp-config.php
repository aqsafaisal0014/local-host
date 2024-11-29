<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomerce2' );

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
define( 'AUTH_KEY',         '?LKU]J5@FOum6P!&MMh0wo1}ex`|`6p~/W ~gUw1;jx>$CK.HN ?O6ab<zF$mXF{' );
define( 'SECURE_AUTH_KEY',  ':!7M#J|ha~[6BE+ggH]pbD&I>}I}Zr .M6%b|-=UPm}-gtTu!^Q<R@X)DqYsl|$l' );
define( 'LOGGED_IN_KEY',    '>c;a:fI}dHm?K=cbRv>aFf/m| e<.bz2yEcQmpQeTc 8C)03WhKTk s@O^WG:iM/' );
define( 'NONCE_KEY',        'D P3]=kZ#]hRzj_Lu]T?;dyQS?O/[muYnCb,iKli3;;9:R/7QW_r18s;#T.GaDq9' );
define( 'AUTH_SALT',        'dP[E9Zr1bC~U+Mqk66M)HlxzRkax(),,74uS*#i:9tmk}tJ#w*|VR36V<TRYAXbV' );
define( 'SECURE_AUTH_SALT', '^0{mjXR+`*OXW+&p;@O*+fc7:Wx&:i.(@I/GT%mwS@0A.LK2YWvhNuCXKu:+(1(S' );
define( 'LOGGED_IN_SALT',   '/lCnzO2*0SY0}A;6dl8AMJR V^u>CLSYm1b9S<DHIz8DiIk#V5X568:! V?s*7-2' );
define( 'NONCE_SALT',       'lIk=ilp1X.?5QV1 Zx^sVH2OwVq? j2IBqlV61[!j0CZ*!~%Z,;y,u9{{zfv=}Mb' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
