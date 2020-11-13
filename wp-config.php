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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'ffCW}HiDWKb}>1kf):IsCfj|;Pw;F&tS6gt~PH#-;o411l%pL35;LlKH&MAl}$NR' );
define( 'SECURE_AUTH_KEY',  '<Q|#(mZ.ffo^QJ]N8*m>kZs#_)yNdXW==+p4{:P?efu*z _)#BEU^wNcWid=d;a0' );
define( 'LOGGED_IN_KEY',    '$)emY{X=<j:B6a42nTMF?1}&%N)kV-TJ}B|H0SnmO94`d#qGpitN+AKwDQins>,I' );
define( 'NONCE_KEY',        'nqWRV~Y$0Dw5lsn3uX=|jIwyfHu9B%0rmkJa<`%>`.#RalC|ghyek?2+.ju_4if5' );
define( 'AUTH_SALT',        '>?_%Xh{Fnp~G8m$?@4z;KLf4<Jo0J{nR59t2&._}S=.nC1{TxxI[9DQ+1/yC(R9/' );
define( 'SECURE_AUTH_SALT', '(9_)}$RY*^hdy$q2)e@JPkE$DqiAHxxfD&Fau$85+9N*,pV#m[-lKXnxSU?Kug7@' );
define( 'LOGGED_IN_SALT',   'K<{BZEP-E&xyaL4jqiG1pI4Cs;}MGJ_(9*#r~ k_I]`/S!HzMfvgUvX^fPayE-IR' );
define( 'NONCE_SALT',       'hGk1</d{5I,v$s<vj95I3<gQ:s;GPX9/oBOctkyFl!xMg-VTr4>&)UG[][<8bh%Z' );

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
