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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'search_db' );

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
define( 'AUTH_KEY',         '&@!9p|S:0?qw(]3=oatWcQ*!(@`d$z4o?4A3yx6Bc-3$Mth:[72,s2{.!aL:xQN-' );
define( 'SECURE_AUTH_KEY',  'v_VtKwL[dI#H5_R5GI0B%Z~KB9^?j_Y;:pK=6dsXxWrBf(~&(NLD4[.%r6d>}//c' );
define( 'LOGGED_IN_KEY',    'MkWk&x u72)_gqss5_G4nnWl{1skCwx$RKN4tEj]Po&t7f?s{Lxas/!+IS5Fq!X&' );
define( 'NONCE_KEY',        'C(8UqOU+ZDr#Vox@7:E@>5|4,ym//HI=H/ZGNH,5f7zL9*Q^d`.  ^_?mZ7C ,op' );
define( 'AUTH_SALT',        '<CHmvCCD4uG-t-)E,ia%g ?N26XMy(r)!CG;(#1e|2)/udHI=bfSGN<cT[&f)?ls' );
define( 'SECURE_AUTH_SALT', 'V&*pFogqZz8kGnUe.xf/|]z|<M/MOSqoOsmtr.JiGzpcXWj0OX (fmBDrVPnqLoH' );
define( 'LOGGED_IN_SALT',   'Wj>+fwPlgYrl^yxb=;roEjI4b7D5-I{yuFdURg-;gqzgNeAeOv .v1s!`?7Wk&#^' );
define( 'NONCE_SALT',       '/.6dsEbp}!!yx-7Vbx3*2i;RRhyDH*L*kGK:Gzfw26L{0>|Pf4#5Or?:z~.rx+|+' );

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
define( 'WP_DEBUG', true);
define('WP_DEBUG_LOG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
