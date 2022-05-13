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
define( 'DB_NAME', 'wpblog_db' );

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
define( 'AUTH_KEY',         'lv./e7r-0yl616O.NWb6NuKa+cL4O3v~U&9HR4]!xiL1+s;SP9 xj0M*U:{00fJ?' );
define( 'SECURE_AUTH_KEY',  'p18$6dyYmx5]Y9N7d;GIZin,f?&Mxd7,&Io]$]B}p4Yh5_kReH#{o|jZ%#-+#&p.' );
define( 'LOGGED_IN_KEY',    '-M`FxdDt7&0nY,7SrDbq|Tq#Y.f,8cl5*j!(?)<pl5(TQsFYkziV:>YAgr//On-U' );
define( 'NONCE_KEY',        '{bb(sE5^07D |`.[jXzbc@!m^kD.nO.#IzZ:IsmDgE mg7!`Sx]+Jxxe;PMz6l%-' );
define( 'AUTH_SALT',        'H.32WZ^mC;[1l]<YX<y$~W^Eq;7PY6utf0Nyh F[<-uS[e-DuPBVg^wG;u>XvBMR' );
define( 'SECURE_AUTH_SALT', 'q/CKr`/56@fTiUl65Y}}Tq[_,0v;L4]DY<]u4zCWywp1>(+ZDDnAnlP:=V(`mJ*O' );
define( 'LOGGED_IN_SALT',   'Rkl(7x&o=uejUJuQ<X k7i+8n%%Kxc`?C%./-{NiGMlfC)*4H}}|lz Et6hzob2S' );
define( 'NONCE_SALT',       '%`GE|B31k8|omrt#E#%Z55!JxVrxp]P+*>FoGqO}Fs}YwvANEziMKdYT5ox%P:A}' );

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
