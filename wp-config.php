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
define( 'DB_NAME', 'naveedd_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'u:Twrvn-gdDy,}&0+q|ug/b,n>0`h3-4{5T;oEhO[-+LhKWx%Am.Ln!;bmhX_A,w' );
define( 'SECURE_AUTH_KEY',  'JUV5)VN{&-<0q%Vc~|^aa6K25<#nFlB}E B$QK6dBM~&CUegba](k(,AF[-iCQj)' );
define( 'LOGGED_IN_KEY',    '7_2-!I_>~H&:MLZI;DUNccz!Zlm:#+l7*{&7Ti;Z:r``jFQ-QPCf}cLU[;C%H=a(' );
define( 'NONCE_KEY',        'SApZ:srlEw_#e5TP>NfYi7LB11(3xVn*BiPU%`4L1BN7?XZyT:[rBO<$DN, Mr#^' );
define( 'AUTH_SALT',        '%V-(@HUdNWDEqd%hq&y_=htN/Uw3h3wkIyQ>]CR$5j4t)I0e29X$JKytKDw5M>*^' );
define( 'SECURE_AUTH_SALT', '`G_|@q$heTZCUtyFJ:jHGT36c:=.go P|`9.e;xU5Uwi_{mNU!:OyBYMxTSsFRaX' );
define( 'LOGGED_IN_SALT',   '1/v~Av]!.-(A x3c?Jf;a/0kB-ueTL1V}|jx&Nj+6D%_`Ztsod9r3vf~I9X~7<!9' );
define( 'NONCE_SALT',       ';!`$n%887WLv+LQ?$j%O_(Gf=v&x|7u+&(b>!m}kHXK.Fdu>TE:#wY;Va]l%m2wN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
