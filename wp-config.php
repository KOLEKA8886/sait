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
define( 'DB_NAME', 'nikitin_34352' );

/** Database username */
define( 'DB_USER', 'nikitin_34352' );

/** Database password */
define( 'DB_PASSWORD', 'b3f9829c6f803a7ad6fc' );

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
define( 'AUTH_KEY',         'z/=@&1;rq|7bc0iUQ(hyA#m77+}c:$Sm6ud2@vl&88s+sXU`/>29I|Mgh*H=jQ=Q' );
define( 'SECURE_AUTH_KEY',  '(o+oF+Nx[0X0K6;@vG,X.ti AMra,y!2#bmZ+MagcW)H|Om@tqf_)YUQlRVa:plq' );
define( 'LOGGED_IN_KEY',    'vDe%Z%q^`#q]o&R:@TD<1J%km%y.J~U=]5]Z1_C%NPln/Ch:[6i;#X=7_ro?TMc ' );
define( 'NONCE_KEY',        'mNyz##D.-X!]X,giyHtm#k0M;5}u/Z3+?(/mR|>sVZK5FEN{RQ%<K.FlU3MJN6o-' );
define( 'AUTH_SALT',        'sdZrQ>Rhn1fC3AHzelmJVH|3` ^uJF->2:hY]imfUrc2-y08]AIHMVS_DRq`c|[v' );
define( 'SECURE_AUTH_SALT', 'Qv;+iJ$={c!u3NT LY&5NMVl OPC+QKxX4q[]`Mt5Dk=V*E-g[R?`#J[f7f;F 11' );
define( 'LOGGED_IN_SALT',   'FLQ@o%P5ETKb8S?mJHRyE$^TcQ#5m;^(=8[?k;/$b3:k&$z~0b}[7YEyT9nfv:=b' );
define( 'NONCE_SALT',       'K]=@VN $~um?HrNIT5jV_o@@np50WKw-!::,N6i5Pjscf|?dAg{W`hX1;TL^S//2' );

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
$table_prefix = 'wp_zwliS_';


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