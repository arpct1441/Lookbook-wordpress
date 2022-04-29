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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/cU0<LKkA0`!L@L*~Iq%R|@GA0< =IuKRt>LeVreWV^P}fn2iWCb9{0!msOK&;j8' );
define( 'SECURE_AUTH_KEY',  '_UX>m`2u1relMC$k>0rfZ:vxgy]EC9aiD]!g0_~%[dYH+GB0x)GCW 0tN`L:.Q[3' );
define( 'LOGGED_IN_KEY',    '}+Zrr+Ih},GfhqMOVy-xNZ.NM#f/~0}aI~HXn0Q@@*`15mTg^j)MEJ4VryA?;p*1' );
define( 'NONCE_KEY',        'L+|Or^v}Qk` /6+pSqV,-OL+]cV>}*jxT@nB)fK{>yh%Wf?5lFzuF}8Q9&f`dk$!' );
define( 'AUTH_SALT',        '9F&9]k1FR=#-,TG5]Z6a#b_Pl?1Sl1i=1U&x@X*#6h{3%|<LrDsB[<|4LK#KNp{_' );
define( 'SECURE_AUTH_SALT', 'qlE#R[1xjdMy_G[R1:<TZhS=`3T}*50f@e50D;RCKPai;`<{>_TS0zKUQ$XNuS_%' );
define( 'LOGGED_IN_SALT',   'o4-/4Tl[)n<ai2_o,4L9M)/5LtW&h3=XU|!aY{m2ug)0fa1qMVABrq{MQ#2Cy2a|' );
define( 'NONCE_SALT',       ')YaYA36`d;$V,d5x1ZDGpafz<[@U|v#<ltwzmqXI:(uweR.)Vqs[>PcM%?N%m%FC' );

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
