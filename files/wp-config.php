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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '##h<hJ#dy$;6%h.u]Ou,5QXx?x SJ{c}CQbhEB}JUG>9%W!l^ADSYj)}g6y6U;jb' );
define( 'SECURE_AUTH_KEY',  'iRpO,J.jQy3B+vFPk iR,r.32~QiG[,$Zj*74M<4qL$sK0JlZL:~b>0HQ?a24Xz2' );
define( 'LOGGED_IN_KEY',    'P>l`6l-47a*bO^W1wCK5U+VCHo4X{Ir&ML*P9j}:)mGG2+2I$W3tB#GoA/~E6!aF' );
define( 'NONCE_KEY',        '(f>OCcBte$Lz./PZA5Buyh;hsJUKqJpQ%2Ca4~D%H^5[a2#C!>fJV0]mZ?P<rcF0' );
define( 'AUTH_SALT',        '>]zH!md>AP}[d^(65U`YPz7F)=2:vjlCtI=Zixe,Xw_+fKM7Qdi8,l2Y#*l8;n7=' );
define( 'SECURE_AUTH_SALT', '2BW(aJU@&Fa|pVN!Ao)^.|[fPg.$E~_!$_UgIyYY8ce`^h3+.ibDx-z,*e?]u0{C' );
define( 'LOGGED_IN_SALT',   '(hL9h,SFK+[jdw}-#Ra*v8gCDpBlXE osk=@,k6j!lGu^0xi,f3zPB7h#om)?8b^' );
define( 'NONCE_SALT',       'k?=Xc.g 6S|Bh:D+hU,AXzwp/0Wi%N(v|nej1wyR~90i|2rtHxem`Qg~;M>?{@|7' );

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
