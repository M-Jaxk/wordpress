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
define( 'AUTH_KEY',         '^s OY}m(,yN/-[5tOn%sBvi4(8`D`%a,`@:T(S}+3SV``bK7OVAz25l[BV}HI&)h' );
define( 'SECURE_AUTH_KEY',  'x6Qfp/SbxQ@#R=xFq(;TO,IR,-Y{{@$_|hz:%3#]#SMo57jo M*RA3:gXCyVYzZo' );
define( 'LOGGED_IN_KEY',    '<<6o/9qY4m,}1AwI4CBocy$)^)#fcF9qv?:5l>$3!^#X|,Bta!h{DZ{<(0VMWyF@' );
define( 'NONCE_KEY',        '_G/8g!@Xg~RR04s}2>MlvgC1Pgq^<ctw?F=2Hw>jJwB tkW!J^A@3/oJFM`^44#r' );
define( 'AUTH_SALT',        'jzz#>AVRve^I67?Sft@P5*1aH-t|Q{As5;hL@35-b][{W[?K;)E5jmS-O1.XI=Tb' );
define( 'SECURE_AUTH_SALT', '|l%4a#]aY8fIT;{j{gL?wTp+m%^e1<,bL*bwWys<N(n$)6-?yQ) o!&W5%[A|mYH' );
define( 'LOGGED_IN_SALT',   '8qJ07y7&e0!5|zBP+9_W#*{wB&a9es8c_X@/pZt[/c(q19Ti{2TO+u{t=ipK`F*B' );
define( 'NONCE_SALT',       'G=AN5Dvz$2}08&|yJP:=wn/| |Uo0KPa08L$he]KO:&VpkQ9Ha3[7lFh>Xi`AcD4' );

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
