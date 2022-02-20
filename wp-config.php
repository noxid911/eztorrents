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
define( 'DB_NAME', 'eztorrents_db' );

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
define( 'AUTH_KEY',         'k1;ioqa5c,PQd6%zC`9|hfdk+pIT{0ykB.wvfaQ0_(TUy},h_(o,sD8<O|@<vn-W' );
define( 'SECURE_AUTH_KEY',  'Sj@8}fg#W3m$OKXlyY*aVK5B.teS=~&P]h|:0[olKnmoS4J6$} _UO)#tg;3yV?K' );
define( 'LOGGED_IN_KEY',    '?m&&rTn0zB@7o(8u!C!+#3%|Yl~!KKcFb05#tPThX{SHMdqdLlDGz_zjI0g0Ts8?' );
define( 'NONCE_KEY',        '0vG{Q}[Iyor-#151gIWZ5Ky5(P$0{wxmgSBaJsKo4?p=a*eHy9E=H8OevtwJHo<]' );
define( 'AUTH_SALT',        'MqU$4jRqpo1pZ#Mfqk,j~FKDyD@(`qp,kck{Bv[/33zw,A(i(3xb)lgEm4~{._l,' );
define( 'SECURE_AUTH_SALT', '3VJYTVh#f~LvBYUS5Fs9V5SK(0BO`ZK>?$HEBv!kr5=2:%=)B5_zmdn%pyATFgd[' );
define( 'LOGGED_IN_SALT',   'OJK!|`y@SEn$g0Nm0-U[PyY}7>.}u:X^7hMdZB(NJR:S+H@~SuLj/V_;w5j(z.;6' );
define( 'NONCE_SALT',       'v}t1!B{q6}TvDK=Cb+5A6<}}A!zx6&Eb_+5|7z[aI 3r~`)el1` l,D`GI+H:I6E' );

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
