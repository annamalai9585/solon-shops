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
define( 'AUTH_KEY',          'h+2|Sv{x}DHoI6D_.US$-K]D%)2K3.v$Pto_b.5XDFu+B(Q~7I9@ 7SR{]*7_60Q' );
define( 'SECURE_AUTH_KEY',   ',s>O(B)oPL->gAEQ7X~~pZ;Ha/1~=YWF%W!_Yy`9JxB7?^(`P$lS+>6~}0d:x2)?' );
define( 'LOGGED_IN_KEY',     '-]4D?;K<`$7,NIh GqJK/qN/]Hd#7wiZ:wW-Jf4cmGlSj?Kw^r 5ADRqA~?almX=' );
define( 'NONCE_KEY',         'zM>z0%|vmz5sXGXZ:Uve1n5-AUFHj3bzonj+~*6)pA)%z 7s+ZvG07M$ohMb5I=r' );
define( 'AUTH_SALT',         'n9,$Fr^9N0,6AIS>)cq6:/Mr!kM9C}(phBk5{r:*q.gy]krVhlh+^C]73mea Z^I' );
define( 'SECURE_AUTH_SALT',  '{56wrStoAMOs[I }R^K;w|N@`TO6CnHMO_vRf_0>n{(8v7^f:U+!C2Q$/3w}7E6~' );
define( 'LOGGED_IN_SALT',    '0Qxe/N+X`.2QJB.BvLB25t@ |d(6$G/$Aa&gPyR>)SEu4]PEYBd0QBo(#+]xm~6s' );
define( 'NONCE_SALT',        'OS${?55c<&z~trp8A;_60-B|;g{P#PH~BJ9dhy/@F8a;QhdgH>Mn:]En+:XBd5eO' );
define( 'WP_CACHE_KEY_SALT', '_Y/c|@>NM%[ew CMtu*-o<A|ZFHd)18>5H,OOkr{[DNso80L+L}N27m2=9x6Oept' );


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
