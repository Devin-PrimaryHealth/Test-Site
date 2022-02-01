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
define( 'DB_NAME', 'test_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'sL-~d-Jw@{+^LOah(m{Qw8U*&,Ghr74J=IIlbr]}Fa=rsRYlWr$hUkhZ3EI9m528' );
define( 'SECURE_AUTH_KEY',  'vz>/M~yvzZH_U p*+G7NLzr$]~tp18z(j45WuEaFGYVe#>kX1S`l ]7:0&~$5={X' );
define( 'LOGGED_IN_KEY',    'tM){vN,,1%|21wMD./Q!9(vkU9ub$9^ {uxJ<jS@9B0gy@%IpqI7#SVnAD* vh|#' );
define( 'NONCE_KEY',        '(({|&SL&ns044JO0-h,yETC<rif/ODu|d3%S7IfM7yMhH1~q!fGa&##K50|V.p o' );
define( 'AUTH_SALT',        '}{Nn/pR>bFn`28ig&EaZ*K[iI_L%V8j$~3%W22!4j%q1YST6{!/ujGz7FX.Lw@*%' );
define( 'SECURE_AUTH_SALT', ' 1eK7:82.uYp^qf_;axX1wV)mWDryl!1d5a+DW`o%GuD*f}+d$mZ9H.34]Kei2pz' );
define( 'LOGGED_IN_SALT',   ':;8Opyp+g7.D8ZeMOkR$$Jj[cJ+/*HQ!^7ZwC46c|zL0M,D}ZEG ){X:+3$R46bs' );
define( 'NONCE_SALT',       'jX)gwZlPDb>w9ud}mmqD`!dEGHpP&_NMo(UFR#]k5APG4<|gtpGhFX%rdzdgh,b ' );

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
