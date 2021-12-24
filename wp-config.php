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
define( 'DB_NAME', 'digitor' );

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
define( 'AUTH_KEY',         'WPN7t,B2(><X^~X9/iS70_o+o+z=}*HbTX/?4$,aQ19om6eGL<wLe+}+R{ &J`d0' );
define( 'SECURE_AUTH_KEY',  'GM3#[1SX)Dj9Z5-pl:uJQ}>]n(}%+u3q--%V]Np`6SzL+lD[a&k$8D%8beJ3@u#g' );
define( 'LOGGED_IN_KEY',    '}b8vT&u[(8_ZJ+oJ.4^ZFLgWM2In$Lx=x/f$=XDAM*y%s56^y3=+t~u@R2=1iqA+' );
define( 'NONCE_KEY',        'uMHb(KvXn$_4.KfCb. _d<})Mz66<rFQwt^hQDxt9<=7{|u4KY{Z!0?G9I{~Zf~{' );
define( 'AUTH_SALT',        '` LJM_3ZC/e(NV@^=O]/KD7Hx`Pq~7q|oca.&taJK[|EonMeNxwh(B1@[L7jS+0t' );
define( 'SECURE_AUTH_SALT', '03>K7M_;i`l3M+H]OA9},br3:gUGZBs#%Bbn 4kP;19C4T fW8oW/4`J=G(mM_;-' );
define( 'LOGGED_IN_SALT',   'c5#vR7</1+;J2SbrpIC;qB&OL]xSwTBf[{.)CDhZ5:T59_Qn]4^O9r#fP/K7=`[v' );
define( 'NONCE_SALT',       'RKY[{0= d 7]a5;/&l[7dbaL+u<EAsS&r8C-y*Eq  zJ{=PFN7Ppbd&i<q0lUr@i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa';

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
