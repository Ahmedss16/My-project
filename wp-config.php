<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahm' );

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
define( 'AUTH_KEY',         'r#1$FeWDQJZTqaM%APHaWIy~tlO?.VIk7WtdqG8>)<Z8N0~Mfy|E.`K_e mzGj]M' );
define( 'SECURE_AUTH_KEY',  'L6M-O`creH`2|0a$S[cZ2ajHV2t*Wv6PIS01<6`ug8tqnkVo(JlRA[)i,3^Pu%w)' );
define( 'LOGGED_IN_KEY',    'H@[.f&Q[?=L)=)f0W~M3i^QhmwgZQCO_%TAty9up?#%=UJC0?z~ID^K)=H0|U|k&' );
define( 'NONCE_KEY',        'zVm%C$HR~:J`Tx[4QPyqtP@r&2?CJ8?EHjmr#qk{/cq=c#;x:@D%OLC!;,p]zVoP' );
define( 'AUTH_SALT',        '+ b7z2M */JIc|A6;3i&C3_av>QLUyO7g0VaY!AI[#`?cT)+PpGzD[f)@1bD$7#;' );
define( 'SECURE_AUTH_SALT', 'kKdKB1}o|x@Uu/QqgtSRK7k|V`BI#0xOqmHkbd)vhq&-!N=A=~WFF,)~??3w`,5m' );
define( 'LOGGED_IN_SALT',   'CWT}|?Ph<Gm,;$=nsI}o_hZL ^K@dZ2Y-zro*zIFwJZE*&,,#l>6qK;:]P6 -uJn' );
define( 'NONCE_SALT',       ',fb.Du;kEp/EDp2n&LG)Oa?{myN3:6yMzJdJ9YyUTB^GTkZ40^*HSz<23BUJogq+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
