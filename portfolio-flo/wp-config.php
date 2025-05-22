<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio-flo' );

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
define( 'AUTH_KEY',         'whD<=0f!#]`PdWJ8@+*zbI<n$T$-LTE#Pml/@}R:Xrrf.?iOm1nR~lv,Qp}C$X(L' );
define( 'SECURE_AUTH_KEY',  'IX-&!#0ri[F{5:D[ e_b@.tF!ct#f3F:_Dc KUyYi!|Im^AQjzA(k.C>W<2}QHk4' );
define( 'LOGGED_IN_KEY',    'Bjv53!}b?R]}x#fX0wVQmfv+#c$:&h~NmdNk!hbD_;zJ<ia~)b9Q/3,/HYT]0ERP' );
define( 'NONCE_KEY',        'MGhi505E<mhfNI4GQ@ii@Oz>ka {:i[#2Eim:qB8`u}YN>KJ[FE0r|`M|kDy4i&`' );
define( 'AUTH_SALT',        'WAV{iZBD(E)8}8-KL#<nMbV{f:E=u-7Iga^&5u^e`hlh|ww3n3:nwi@_kWNmc#(M' );
define( 'SECURE_AUTH_SALT', 'Ahv<5/1N*Kg&GYt-%_&bus}&G=E3NU>wX]EpNUu}->+7rJS0G)N7mZOgVKRSwE=2' );
define( 'LOGGED_IN_SALT',   'HaY{A>}zu2>pMw#c$VJ}1e`2L)!|$} 1SY;V.Zt+eN-gEQ~)B7`=YtvjNZK]N>2q' );
define( 'NONCE_SALT',       '8[t8S1Z$qJaImN0vmKjF_g)7I]2X#+bN!P: *3ngA0Cuw{Yyq5hb5nst2#GemT/U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
