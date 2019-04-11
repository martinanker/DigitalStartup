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
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'MQ+?J)moB#j5j)c&RvRSimnG|6@!vSqL,M>9Xe+/Fz`z6dT|p#,({86)]na2jL#1' );
define( 'SECURE_AUTH_KEY',  '%yO:Uk{!*+<a7!Ai=)j,P`tX2/)ef0*0P9CJSVT__;)+P_!KIrhi&602ws:X=.Q+' );
define( 'LOGGED_IN_KEY',    'de,fjgFjtuYG0~v_KQnIs{S*JRZ0:,q-g)w9K DL#5eRr}(45Z#E:`6g8v;tRN~A' );
define( 'NONCE_KEY',        'YvYsMknw=Z8i 1Gdg&q#~@Z,>mGb_kNE,FaYXt|-s#TcLuWu2r)K-Aob@J)&ogfp' );
define( 'AUTH_SALT',        '2BZ~(V|Z^B&U@x(Y+RQxm}O`~kEH?`-v7EkRqM|scB]T$/4|nL@yJealg7$R.cIv' );
define( 'SECURE_AUTH_SALT', '<`k?tv-*^4mME)XBP{.?jt*-$!zMQ2.QL@1/l%c)>5bSO.q2V%|KiP0(A:k]cFIf' );
define( 'LOGGED_IN_SALT',   'RT@Y}r4hy?x005,Q6[yVFQ$a/IPxdKq1!2N[D4+gXsrYM9<Ad1QDhro9S!8Rd?Ut' );
define( 'NONCE_SALT',       'Q|UYEgNO]mkm)H$Gb#T/sjMxc~Aol%r5!`U4x4>XMCop+VApQs4HjJveF5c[k19S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mcarewp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
