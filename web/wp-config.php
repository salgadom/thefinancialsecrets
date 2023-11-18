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
define( 'DB_NAME', 'thefinancialsecrets' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'Q{NF*i`k$HJIk5Mf_5P8}8&`Gj~~+hFDzoYo$]^[}rOpr!=&5bzT9nUQP49hw}[L' );
define( 'SECURE_AUTH_KEY',   'L~|6-#|(B~%3D ,kW)-f<iOyG~3<VjhP$(O^oB)cG=fcpXqcw<(&XJB~$mcM 5u[' );
define( 'LOGGED_IN_KEY',     '.S^wwRZna}+R!v$yX5V9Y9YW=V^:G#<f$v:S2nXc#6`#o|XYMSq}b1q.E+%miInx' );
define( 'NONCE_KEY',         'q2f#W2*=(q#:adflT<D4+:ypl-C]J30]XC}#T?J-}{yveFLn?[jGsKXw~ 7y0Hll' );
define( 'AUTH_SALT',         'Q4Mb/Ui8(HS 6KE /_$# 6[0>2/.R0TYTW|A3yub&q%RO=rs:LBV+wJd.D_D!iD:' );
define( 'SECURE_AUTH_SALT',  '(4:FD4*ps)U.n&F*@uHw.IDKf:/gRrq+%sqx$+7</Zj_zQ1-IIDUX1R=%6-?L=G1' );
define( 'LOGGED_IN_SALT',    'Lu<r_J[!Zg.O,OR[%usTwv =|_:F-f8{Aot3lk7NL;H0;is?}9F9Peb9/Xmj0zdY' );
define( 'NONCE_SALT',        'J~D;.+p|[P!G`|8Lax $sNH!1wc?,ZjWcP.!w!/og)GcU-G<!p;$s({vdRwl5t4 ' );
define( 'WP_CACHE_KEY_SALT', '$n74b136<$.!bthQ(tp8o:$!#b&]NxRrj3lbFu8`j?3|ZOH(nb3v&AFH_(kM_dN)' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
