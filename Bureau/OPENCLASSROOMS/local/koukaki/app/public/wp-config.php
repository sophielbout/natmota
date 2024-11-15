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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\sophi\Bureau\OPENCLASSROOMS\local\koukaki\app\public\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',          'E}+0EKDg;t(@`>#_w/h8ZNJ%[r]gITW[=tg(Kr|?P6V8[]sp|Fyn8[{hMWh|cr$o' );
define( 'SECURE_AUTH_KEY',   ':RW4@UzI0<:ZQC&umb5+)wmekpw{^a4CJR4NzM`_t)WK>[D9^-.uZv61PB>FEK6}' );
define( 'LOGGED_IN_KEY',     '@md/cZPht(usgzHT57~O5,bCIJ`u>b/,@+xpvPOM#B,cdb.%(#LwcC(5L|Qb|Jh4' );
define( 'NONCE_KEY',         'p7`~bgZ}EHWb1O/pVmw,rIcEer`S>Bhpj:2n4vNsGR`ylU?2n&_`zw-=n%:zjPPr' );
define( 'AUTH_SALT',         'pR}13j3@Wm^*FbI2G|O!Hus%>GIoC<*8d0Zfv=|DM=FgoW7W~r7X8UgGs%KMzkw|' );
define( 'SECURE_AUTH_SALT',  'AMn?8iW.ay2J>06VxVdWt6Q*{uDdCmowY)*qMO}>Nz-iA#{]uuwI}^g{$>bQnLei' );
define( 'LOGGED_IN_SALT',    '~)3(l[F,ud5c*-#4* Jh=>Z7PZ/ 2..=p*Q>OU{@QoK (D8l 0xWdQvJlQe2P6]#' );
define( 'NONCE_SALT',        ';73+|A|n,M[m:2[n7h:Y1/&c]TR1T._}13e%Hx$2XJch*G?0rN.TA9X!8L0%@i6V' );
define( 'WP_CACHE_KEY_SALT', 'YLZ7r/{.vrrp81cYmA~6pdeOPz4+;2us^.* VKZFpfw?D<g(=$ZA9Hn4{SyWH<~}' );


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
