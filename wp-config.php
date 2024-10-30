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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'N]_7AAUp_^Lf5#)}KhAcYcX56w_;;Ndok-9A5+M3/3uqG8cd7I(~TFb.>0wxXYFe' );
define( 'SECURE_AUTH_KEY',  '/c}Be9!)V?G~ZgL)Rros0FWFa{C]ni)B,5~[0a*4juj&^a8rp4:t4QB~31SDZo@$' );
define( 'LOGGED_IN_KEY',    '-*/c6sFHYGz%S|;:[n$tAEH9/NIL`)S&00s<g0G2 Z_{qU9vH)!A:Ti~R^CgIW?g' );
define( 'NONCE_KEY',        '{_X,T@O%<XP/Pki$0czR@T@^gxP2@MrZ>k/ m<@r+~x;NF1{<3;t|}*ix?2.{NW.' );
define( 'AUTH_SALT',        '`nCs-uvc49OswXc*-/Kfj7Np6<7~{2F,bxx@~(kG2DKt&`},0.=9.8LWq8PIrea~' );
define( 'SECURE_AUTH_SALT', 'am29qFmHmH8W16{Aw(Q4EB[ECqd,v(IagVHA?jaLGP0|nB0n$3Gg>uvIy0:Fa[U^' );
define( 'LOGGED_IN_SALT',   'oTMd,!Yhefne{Y[gq@~~{i.)US]0Q}A;j?w:o5xD<{4%{~]7-s/*Bm-`6})`me5R' );
define( 'NONCE_SALT',       'O?Dny7_Yv XZEXv:cX_Sm85@&m7=9)st%sQ:~Mx,Z|Qk`7^pWTkw Ca<PD1k=#z(' );

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
