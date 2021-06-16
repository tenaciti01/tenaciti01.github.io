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
define( 'DB_NAME', 'ecom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'X-EV|Z(k;A-Wr8hQUl;4lvmp&t[.L;73w[/9Ia_HYTAvf5/{pwS+}h_M=A|U0xqQ' );
define( 'SECURE_AUTH_KEY',  '5xpbb5&&Wwa?A/vv}GJ4yB=> yW@ThS?sZEaReQWr!4{gT}q:^<I=;`q&a9z+Iv?' );
define( 'LOGGED_IN_KEY',    '86JVJvc?>XSk=Z/Rs3mmm$Z5ky(Io2xo=!c.7TILxM[ecgYd1cTHU_[-7XB2hB(D' );
define( 'NONCE_KEY',        '9{@^]/;829/`Tc?56NG7~{if ?r:<s2JDxydky(S_y[~K!Y I$uO7Jb >z,G!~},' );
define( 'AUTH_SALT',        'qBd+/S;Pjb`yvIe/lnBVb(jo1%D% i>[XT} ~,m%3^liSJ!Gsd.[yg%>:4p{VYjR' );
define( 'SECURE_AUTH_SALT', 'U.OdGj*|U3fz@=x*5&=Pi`8vA!5/Z5/+},8!}j7mYvid+=<3pu.foxri<BO97x%O' );
define( 'LOGGED_IN_SALT',   'g0xsneLq~DiE;yfEHzSh4H>{a;wHSX}?A2$%O(Bm*3B1XijW0#*=(}tv6%RNma8Z' );
define( 'NONCE_SALT',       'aMgalb~^)a)zN4dS]=!(JSYQl`y54q81%>@M?^5vGIS<.NU}p81~_zDB}$h<*y-/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
