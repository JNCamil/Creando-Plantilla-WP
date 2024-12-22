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
define( 'DB_NAME', 'Plantilla_wp' );

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
define( 'AUTH_KEY',         '1PImKpI^fO%,KZp/d#G=qxDUC?wW*d#f^5KOZh(hwPEdVfdlH+Z{w^<~9_]G#b=j' );
define( 'SECURE_AUTH_KEY',  '26wt;l5uI.T_j.bOV:u0Z>K%!`z]:%gC:ssW|D&4NV[e6],#@vr42)wlj;AT_3qM' );
define( 'LOGGED_IN_KEY',    'KdQtg!%`b$5!jUy%5^l+I??);o|[^+L8urYoTp *:IdyHWIZ>|%sH74T$xe&5a+:' );
define( 'NONCE_KEY',        '+liBTPQ.w4.-_$LGO}f@3_KEJG47fX2I6k==$Tc%5^.z5nl)~-sZ3jK*MdFII$,h' );
define( 'AUTH_SALT',        ']Eviac5=q`mXc@GFbGM`u4l|cN|?;6jTU:_k_5j[{T?PL@_md9Z07^qXDPp`|pQ ' );
define( 'SECURE_AUTH_SALT', 'Nrie8Wj_wy/wa5GdKb}c<8DlkOzgg3|MV#&[l,4U=,*e5wr>}1#!&=5n2e}{=x0E' );
define( 'LOGGED_IN_SALT',   '6TGJo~8B^2|y{!c`/aZUR3P!c`7Kw-s7>F),.Mj#j7xtkI@uTQ4]w`7h(qm%ly]h' );
define( 'NONCE_SALT',       '9+jY0/s6^E`}t_:5#!P>}cx2!gW8ptx.}Eh5a-QZ~_qDRtx5xgEya1L/`6pnKI?p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
