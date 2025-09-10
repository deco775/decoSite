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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'owH%3?3xT0>xq-1LHoh5ZEE,aD]z2DA5VCq(I`m^[AqPHK/L[Ls6IB#vuDd@f&-{' );
define( 'SECURE_AUTH_KEY',  'P02a5Xs9XV7=*c~8J5E=<N+PTcQ?@O)^|q,GdKRb3/@:]&L}aJHWSWet}BT~kZI=' );
define( 'LOGGED_IN_KEY',    '*TNF5M):vL?R0a}r6HZe`#]>~@L1$([F*|r5DX#bg<kB^/ wmP]m-&<=}g< M#w{' );
define( 'NONCE_KEY',        'AZ~9W%U8fAo$Pyv)S2bjQ%i{-,%2*9jK& ;8Fik%.Zfw1,]VwDT8cci^WcJ|1;Zl' );
define( 'AUTH_SALT',        ';V@w8DB?yZc#;.Vsz@y<8TLEDB=o^xbt!jAHB7I*t_0kZGbQfX]2G8D:TH.=r_Ka' );
define( 'SECURE_AUTH_SALT', '+ `iB88NpSwM!E[_5z4+]#;yiHHhA]D7CZmUyb|^7dA:o9{!NXI,5c!P|8&_LB2R' );
define( 'LOGGED_IN_SALT',   'Yj8|eZ6k4sgy.-}j!8VN}I6^zM-,*||~S+,. ZBf=h3}|sIZYSh08C#J3N(-b.zX' );
define( 'NONCE_SALT',       '>}o=j,6~ebDBjU! 2bX{/@vcS>B@z~?kOY<]xjV;?DBs-#VJ7;AGDKaUF|`&jSsT' );

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
