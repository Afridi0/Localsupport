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
define( 'DB_NAME', 'local-support' );

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
define( 'AUTH_KEY',         '27I^3A%W;x@]4Iov{U67uf;hrOm:gFZNlwS.Z=4+&=3^ULL5i13;k]llybv{M),{' );
define( 'SECURE_AUTH_KEY',  '1x{Ku0r+$0O!GWd#&SB^qZ;.P!<lcE{y4k>#(=5S}nT45&}XoTL&$$SwqP%A%Y`8' );
define( 'LOGGED_IN_KEY',    'tdduM<z|RdT*^|-8Gp>`%GL}#@@0&qUP$U`n{`rW{,$ceBc8RHyL|}gQc#4((@WR' );
define( 'NONCE_KEY',        'yI_.@4x%io7^`8hky9<?fB|>,Ob#ta[_M~3Cj|@4_QMyT)Go8{V[1KpRG}KD|{AP' );
define( 'AUTH_SALT',        '3p|Y4T]YHGz3+h Q(5Av:rD[8Th`d44@6|A&:~k;=U_r6%<=`$hpxQ^d5{!}j@V?' );
define( 'SECURE_AUTH_SALT', '&t9pyk%:w;R19}BbK9IW,t~ dG?f>G8Iof1Qk <uF`u*{nl)*jL=znppmj/B)y5:' );
define( 'LOGGED_IN_SALT',   '^POgm$wW*N$a+.3[Y[B]V?8|X^nCm<Sdrb%VYVg)!+A|71NRLIH-#fPt+6VtC!E<' );
define( 'NONCE_SALT',       '-tLzKE8IUvh_wb_sH&u,4~wc|8`G,23pL:/}h8My(bHC l0NZwxtd}.vSC^qMLQ1' );

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
