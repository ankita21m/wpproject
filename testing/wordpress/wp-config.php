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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'e[^nN<72^`I~#_b0 ]CeXzJ3_#}cBc-9P{dn$~g@BR7+QNmrw`;:s3h1?IWt|w%o' );
define( 'SECURE_AUTH_KEY',  'T9U/n4EO+EyO:.fbden.Hw#ip|^DxHvq-:-*0O8`I*]Vlnj<,:-#+:bM#RV//hTj' );
define( 'LOGGED_IN_KEY',    'Bi%sjv2Frk*v mkIN4uggmF#IR.c<S +y_:8Xc8`{+veo8,7_p&p6{fZ5NM[$6Yq' );
define( 'NONCE_KEY',        '}^X)i~6Faq,rSQ}G  haen3DYVF!%])a(<T>Fml%-DT^{]Y4?i9tsP4U$EK_A(%;' );
define( 'AUTH_SALT',        'I{Xlp0`6Ir: z$5+;3/@S^/.BQ[WJky7*}c7[O!_Q2m`# ,r1T}QZGvdtIMV*hqA' );
define( 'SECURE_AUTH_SALT', ':rF1eH$)l2y<+KHWg`c5p$5k)`>Fc^ioL#t)L=-5{&Mz+]A80}tE4 c+R$t&@mJT' );
define( 'LOGGED_IN_SALT',   '|F#6_W-8*#|su<<TEd<g8>2I)O*<W3-s?Cprs]#|KFfB@$Vi~&XtVY}V:qlH4@uV' );
define( 'NONCE_SALT',       '[^&3(|GTXiuX/9?vSG}QApTJ);EIuO;|MXGVeZ)Hf<_TZs2f*zUulL_D7&H-td/`' );

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
