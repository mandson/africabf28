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
define( 'DB_NAME', 'wp_journal' );

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
define( 'AUTH_KEY',         ',o6.7F*HnuD%c:}#tUBiY?rv7e3SRmPKy6Jlh<G_ewN43{@_baoO&saf<rh&Dww.' );
define( 'SECURE_AUTH_KEY',  '<[M~DX2OOe%Z|zcx{#=5k-8<W&T:|/P=TF=a$,QuUH8>T>L/T=iK&C[k[<h-*6=W' );
define( 'LOGGED_IN_KEY',    'mc]]~q3{O)pM1?urGC1_D$A.V?Hh^55G/iXn;J),qe=xynWYnCg3ZR:Jex1@tl-w' );
define( 'NONCE_KEY',        'Bkp;*v^9wx,#}.P+@jlX-xh<y|FI1#i6T:)CQ$wQpC#$rjAuE67Sh$2c^>EH|7A=' );
define( 'AUTH_SALT',        'in|@OS`8f:Mhg`n<Tkn!Oi|tz@X#|z-q6RWD2&NL(0-YRPw{>X%b}]-mg4neA^Y6' );
define( 'SECURE_AUTH_SALT', 'iXw@Z}#_DXGR,IZIdR[CnM]Auqb~-Xl:Rhn(V-]GSN1B)<u_K:G}oPBQUDq^@)wA' );
define( 'LOGGED_IN_SALT',   '7&beVDd6 }>&`,3l.v:f$dRXcE*g=rCfPxZ;oUk2`dA6C>to4tFQiB>;WhZAu5ss' );
define( 'NONCE_SALT',       '_]i%#NR);aoeINErIXD-MXG`[%V|dNqDM54H@d_(HVcc^%:(ate^E [tTFG@-wJV' );

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
