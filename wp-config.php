<?php

define('DISALLOW_FILE_EDIT', false);
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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'I;8cF#%<fn/YP&ex#{QR JALy_S+~PbnBK*Z#i+/UoVEfL{7c)zU7V|HJV9 vS!2');
define('SECURE_AUTH_KEY',  ';<gBa]ea0CDA)~bq(tK^.hNXcjd<J:Qb+;XD]r&&t_KPl<j3aWgozDZnBY7tyHH3');
define('LOGGED_IN_KEY',    '$1;Vk5T5ZYhK40J[?KKMvmg)6B>v7!!VWu>p`<ka.i6?-kawnC!JL YS#S6{<,qS');
define('NONCE_KEY',        'N4&SY**3F|A]Y(fK%gUm!q*51e+FeD%l+0N<*n4$*C~xyOjd^3DqO_|$.vW!#XV=');
define('AUTH_SALT',        'Nx8g/93a6`1b }C0q.j!4]C9dK[7]}+6Vwr0)|WJt=l_Q5QNs)Wg=b}atsZ`(cqb');
define('SECURE_AUTH_SALT', '92H&,UrZfm{f9{;297Nhz_r.gu<{W=IS;L&Et:s|I{x5 5-V!<Bj496=.IkH@{}t');
define('LOGGED_IN_SALT',   'OVT0YwJg$?2u`5]2 ASAdP[i4bhs^:lRH+mRa!1U<IGkE!+jyz45@Lz8U6]Br&#_');
define('NONCE_SALT',       'm;Gd,n]/K9!tdnU>Nlz!{+OV&/GE<[)a)dV+4:L|gVVs0}{T]3zS<Le0d4G,h;!#');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
