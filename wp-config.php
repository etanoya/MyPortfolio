<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'markobrecic_com_db' );

/** MySQL database username */
define( 'DB_USER', 'markobrecic_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dmak3EF9Gyr2' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql9.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eb]Z@OX~L1(99J[n+a8eRy}!QX9M%@2+Hvd`!3`roCU{$1RVdz%`yyVT%Z1Y.]/.');
define('SECURE_AUTH_KEY',  'e(!tm,3<I)MS2,YO,|;rv`x,yhl+%_-ZB,E_CB-+|+C[)+uK);T=-Ho+C7n+bpq{');
define('LOGGED_IN_KEY',    '-%FL-gG2r4Wul+bE_nq9)kr?I3~YZ>/$hyj^V-ulrTI^3sya3|ej[yZ ceUv2u-o');
define('NONCE_KEY',        'F,!rv{qRPh^Y~UQP(?,o;Az!3=PT}f|7S_I`nQ4yb_omYgXPf[7&IOBs%aN,8s@L');
define('AUTH_SALT',        ' {R|A6k=aCEx.17+m6C}Uy+NY^)>b#|5|!K%I09r7lt(ULHu^8ojmhiBSS>K`X7F');
define('SECURE_AUTH_SALT', '@`/9<6b=[#|W+w&[IU(d(i Y$q2<.b6VYQHaVx*8*)B:{!=^{DE~o)CE&=up,G0]');
define('LOGGED_IN_SALT',   '-26f4E0[1&5|.+nh|}r.j2Ls+f<|Ad|1{$k{f{$?f]6$L|9BLv~@gCo>p,SYRKhZ');
define('NONCE_SALT',       'K6aaCt[Z48O(3xa*7-FtSjF/H:o-nUU4Yxt1[|9b.4ix<dSrb_B<~Z-y6:^6H>fP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portifolio';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
