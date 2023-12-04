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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S(H-@r*N,2D5M2xSjS{gxb`NS1dCRr>srqTA6b3hXMF9,RO86Qat/bR#{(a9.Oy}' );
define( 'SECURE_AUTH_KEY',   'VOy5-h%E[frikZ=0r9dSa!pCm{FUJwV+8Dk=A~4T/Ub%3~`<MU!03Lz,o[|p?RBe' );
define( 'LOGGED_IN_KEY',     'fRP|Ps6hy^k!W,Hqsm{dp&pi, +b4XWT&_]pISa?)7[|m$m:$wiRAI!i04eE1;?`' );
define( 'NONCE_KEY',         '<caUQ+`:O7VYUzca[+(L,Lz*|RW_4ExbQ%~*5fOqX!rc-.g,|yA;?ZztF*2P;LQB' );
define( 'AUTH_SALT',         '~J5N5B>uXO@g/a+Y`6.:}OBfA7~e!p7ge>Paat`9)06+)<.qo$~<g?*S^lXjg#%P' );
define( 'SECURE_AUTH_SALT',  '_W,)jF8fZCJY76)tb!wK]CM.*9U0Nu?4glJR!9$1cDoJ^vSoSUO5^Bc?hg>xI-03' );
define( 'LOGGED_IN_SALT',    'O%p^=^7@9Fa$8Z5/H@62DwY(Db0UHfVf07in[Z0gcp;af6htJVfY~h&F.W37k8F1' );
define( 'NONCE_SALT',        ',7X)ss}$V&obdi4iJtCJ=8jNm):K>l1Re(]i}@1?NJ9fWV+7S>O4P].tm#:aH#Gp' );
define( 'WP_CACHE_KEY_SALT', '2TO=kk-X9+dYqd/EX+%m^Hb6tFS]V%_We/+zC~}{1n@CWY-03HcQS}9vr22S,Q;}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
