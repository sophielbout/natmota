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
define( 'AUTH_KEY',          'UJs:^Q%Cy`<4j0nwdjHe7ODgEQ2tJ!vSYR!{vfs%_On8ZLaI2c_&FSCt3a60Wo?4' );
define( 'SECURE_AUTH_KEY',   'X_N8ho|! x_T-g+.gx0_CWqmH8h!8!5%IaW(2!|+BNxN^|EAVx,yjWMZd2Dvfcgo' );
define( 'LOGGED_IN_KEY',     'Ap3<p`;3Zdm7,|eqlxxRxbVw<~yfb=+ a`<8U:qCRC3,OmiQ-ekgvdb?BP`C~D}u' );
define( 'NONCE_KEY',         'K8xLN5NS|6E 7;MD[2-Ah-g4X_I68v<qo!wd+bv $uacVn[JUNWn>+ONPR8_}L%9' );
define( 'AUTH_SALT',         'z`->,=ZxK8W%PFmj:l8|vgq]jkpb;^>N/eHg4]z4Z%.9].F kdqi}OegH|Dmp!Q2' );
define( 'SECURE_AUTH_SALT',  'F$QUL*{b:-SPZnl,<8x;;GA%boO-ZkeuiAc,K5^`DwC)o`(>l5_dlwQm9C8/T_/?' );
define( 'LOGGED_IN_SALT',    ':8t&d+w^er]/O)PjNXYJz!eTkWV$Yek4D6h8kvL58oHW6`zVc2?vq.oyQBQBVa@1' );
define( 'NONCE_SALT',        'X@hXH[!1h)*{XgO/5EO.8>V<)hH!$`5!?(E2I7i|0PL6RsnbWomLE2{o![r]5qI ' );
define( 'WP_CACHE_KEY_SALT', 'x=j%8A.Z8/[:6?~c.TRYqvd>01O1~q]]V*h0/$PJK3* ZS%?mMH$F|CKh2LTZ2k)' );


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
