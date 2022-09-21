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
define( 'DB_NAME', 'touristspotsph_db' );

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
define( 'AUTH_KEY',         '^KHz^cSm}o9gh-T:`sri6ylZJ2mHSWCzO7Hzxnxk4)z@qo^Hw%?zsv;;]/lMm1O_' );
define( 'SECURE_AUTH_KEY',  'd6I)wir6Onj)dKfX(u_I[$kAC%unXF*h01ElOba_mI|C:YK{-T2Phn1Mi)sESoRK' );
define( 'LOGGED_IN_KEY',    'Iv:.0.!Vmd-@2xn@v6}4{bOnQ4E-Y$Bzy @Z_0W9QkxD7v^8x`g2iucM_GT6;Gq=' );
define( 'NONCE_KEY',        '5GU.O8Ywq|O!k02w_1)dn;-krxhH#P4sk-xmRLn75lsAgay}oc@@x6=h)_ZXV^v=' );
define( 'AUTH_SALT',        'Tw`Y,.:~C93m7C,.[#|V57Ual?j#A`h~|.|7OMOrR@ OZ~s2L-_vnkwt,sPG:%[>' );
define( 'SECURE_AUTH_SALT', 'x5M(%  h(@;2[3]-N%&__P)R+qM{`3?1wzznxeGuaj!Ne$CCaZ~|.>&4?f&Wn~gS' );
define( 'LOGGED_IN_SALT',   'of`W3j4sOs9m])c7clOX5k5uN0CUUB`TIvfKXGh2C_j`r,^1i/6@O:Ms57k|6A%J' );
define( 'NONCE_SALT',       'FUyGnj s0~4Fv9:l&a_GG!XQAz{,oEmr]sGmFy@):g$Kd(Bhi[DZ6z1!ATd2P9+W' );

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
