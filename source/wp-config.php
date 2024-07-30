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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_woo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'example' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'J)Lew}|;X!0AMz[`YV@75l~Fv-[gU%P*QM}UuIZ4.=7]?)8I,8q[eNrixT#%N<~j' );
define( 'SECURE_AUTH_KEY',  'sUkex0q]Il0PHAT-;hV?uE:l0vVF[Mf.zN;2Z{CgoAt#+9`p$}ap71<U|*9G: z|' );
define( 'LOGGED_IN_KEY',    'O#/,bO*x7rDinyx?B]rta5^o<o0%.!-2}hly|yxuI}WYAWp];p08z,ByO@G_e`gv' );
define( 'NONCE_KEY',        'Li{?YEcc8j~&x:UtAs+3?G84FbO<02M6ln@A}@8}!0nJz(dUL>%W1`k8$Pqi!wq2' );
define( 'AUTH_SALT',        '{4XEx/VufZ|5B&XD.+Yh|db4fY/q3k<R+15rs5GVQ+/# {iC%#DvvFiw7g8P:zcp' );
define( 'SECURE_AUTH_SALT', 'gw$PgXyW4e%{W|K>ag<}IF)y:!C0W%nKvBEu0Bm%T{zS:1Wu^W}V7TU<ERC3&qxo' );
define( 'LOGGED_IN_SALT',   'tYikt8=9x/:`3ZM1!0PF` l7tItO@5R!VtcX:<@la&k67y}Gmd97Wo:|ue03_ja6' );
define( 'NONCE_SALT',       '5-*!I)gqGj*Cd?(uaG;TvR$>?pgCPp5$ck^Y:=S#j,*tgJ_io.ike,Z1&0}(|{2P' );

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
