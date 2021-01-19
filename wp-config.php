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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']7]=Ek$%NrXN(Ag@$H-Q8< ~xHLk[C{bOwtW@mCR*.R;1o=3miY=>c~:fa1<;iH[' );
define( 'SECURE_AUTH_KEY',  '>vfv1E6MBHPP`UM=Cavcrl&t FX0?yxO(VM52%KF_*s%rAI3L<0o4R5TyW|}|aV}' );
define( 'LOGGED_IN_KEY',    '.?E }U%/_#/qMW}G%+5j7r,w8whM,JKCK)LO3hX!&[i:[:2W*@]8o>;=P@?7ptzR' );
define( 'NONCE_KEY',        '{s:)T%QUyeV_S+s<37?_YsrIZ,[R6]sCF)x0yHyx:#V3NMnt[?iTF]wMsjC-80&c' );
define( 'AUTH_SALT',        ':^i32<QkP!opL]m#4em|F[|pmohUf,]ge*i`youW^D(Y~LJf$C9G08S/VM.i/ZSo' );
define( 'SECURE_AUTH_SALT', ';)sjJ.pu^Y#za3YwkkD?a%SAr5@sU~Xf)o!S^sFi[dGT@xI{muYK+ilW54U<tLc-' );
define( 'LOGGED_IN_SALT',   'W7+9^DM;+_.LrKf32iPIN2f,=j!z9q$0).IL4y,f4pC4!A|ZM`O=oQ{g1gJ0xeDW' );
define( 'NONCE_SALT',       '7FsChm2+fXOe/<<ojT9#7o_zQ4{D{B*~:NM/zs]i9F*rU`Ri cQB_q3W=0fk81B3' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
