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
define( 'DB_NAME', 'rugsmac' );

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
define( 'AUTH_KEY',         'NzdwB#};ZE8J`n)/Z^+z//b>Y{p18o#>NDiF432+H!5x3,j4m-:4*R<k6Lt:=0Y1' );
define( 'SECURE_AUTH_KEY',  '/:nb+j!H0##]1sQckq>J`L@D1Uv%Gf846n#!.R5%O-|UA}D+(~?|VU/YY[b>bw*Y' );
define( 'LOGGED_IN_KEY',    '|y $W9R4#^n,pCNDJrrmZ?yD#e#gds/>LCi<WpGG9{sQcU,0&{;<6E}-ro*Re2,i' );
define( 'NONCE_KEY',        ' Z56.z#~i?b?O9uAW{#&>(E;D}2!^EGq2|d-gshPqgu`#nO4mj8l(KF~1xI$CB9:' );
define( 'AUTH_SALT',        '|$0FzyI#La]y(t#1]kPmmYEQ[[H)mi_Dx0]{`f5-=*~&)z_:W8Z&U{xb]*D}3O6J' );
define( 'SECURE_AUTH_SALT', 'Gp=a?Qs@8xE%M/FD4oM+s*H~YO?Lb2]=u.&%%#lO2>CB^<?U.Y&]mmv:$e;Jr0hd' );
define( 'LOGGED_IN_SALT',   'UEjq339 >opW27}zqalj!a1p<ihW~gxFC.-s:Nd$5cdF@/S5^EPCz<#(tEP47[Ha' );
define( 'NONCE_SALT',       ' 8I6^1H.MMqJA(a,Wv$V%`<`Eo(<kkyPgMnT3-qt;.mykyV5I6Z:ZY>L!@jj1mlj' );

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
