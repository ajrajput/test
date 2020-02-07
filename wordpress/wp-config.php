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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aj@Admin1o1' );

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
define( 'AUTH_KEY',         'UuDvpcMt_SR~IQoGR6_Ai^v}oCGD>#QFv2)WU6,j@x&Vft~RzzxU@n!JG?_=kkc;' );
define( 'SECURE_AUTH_KEY',  'tdC&mkcEF&H`|=.qjPG<Qpt?+3LJ9AHEuFG[70=2E/FwHYx%_R>fO>(s~joQLzO#' );
define( 'LOGGED_IN_KEY',    '3I}AWt~iR1WZ[!/WOAYx6Zq2zuv%q4?Os8&_k^P5BJNTt7{d:(9aMUU1/D@QtxBA' );
define( 'NONCE_KEY',        'z_g(Ss9K_7%HGt%Ok^j_[M/R7[K7~[|3][d2?,-aQ34rzWWUQv&<7}Pq.&,x`Wv!' );
define( 'AUTH_SALT',        'WZCxOHMzNbP<ZBdT1#AS.>k}F,LIHYy9gC2IoWH-Y (#^>W9M2P{`i_(MLM]~x@9' );
define( 'SECURE_AUTH_SALT', 'oex>6FGyNH%uL4phM*[]9m0q/gs[kGg6{BLG)~Vrzz7oQs3Mskhc076tu~J.nC.h' );
define( 'LOGGED_IN_SALT',   '6x6`]Ifd~pWsqePv?tLk3vi?.&s;fWpU(S}D|w-@B$HbyFaR.*MaLUno+O|}$etu' );
define( 'NONCE_SALT',       'otv_WMYnVk&~TSu:XZ/am+p@:Fp;8@GDorN3gd1X!]BG#5XWB,9-B/F=GLAuc_bO' );

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
