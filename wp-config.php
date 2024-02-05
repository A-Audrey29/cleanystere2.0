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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Tdo1mk:8Y!ur##*>h.-F_b^]Ilbm,tm/iyhwF{,We*+h#>:I`jI6Y[^uJ7`z~B^ ' );
define( 'SECURE_AUTH_KEY',   '|Y8GI4Sg&0_r{]OE)yeV|_}J=$<OhAd!(vmRWek1p^E>%jzK>,|JlzE%>X$+h`Gl' );
define( 'LOGGED_IN_KEY',     'RHjs2#O`QuLx@KeB-],[U~u$|,i^uWSxG;s|Yi^F}_y>IB7:?K~8NgK#Nzg;I&?j' );
define( 'NONCE_KEY',         'uNroUmH-3S2TyKb>*@H9BLv~;}crB39Svlfs],SoX/SBC`$adz`3>`P&6`l=99!,' );
define( 'AUTH_SALT',         'PAL0^OeSx&BjNio8)wKU=8 S67BET0t$E{yYRyhe!&3oiVU0hTn^[aBoD{46WRlu' );
define( 'SECURE_AUTH_SALT',  'R^Rl201>~&HEJbo-<vtptUn=}Bx!%@Z6G3ABPSRP;ts^80]o 8ntol^QDPVUu[s2' );
define( 'LOGGED_IN_SALT',    'Vg5GMO48K:JHpxg~BL^MGzx-WE!9q%bJb!H7.y<XPk3ZpaVQo!]ywYFGLf1=^%{V' );
define( 'NONCE_SALT',        'jsU,?w^e@u6H<mqa+@xO)U=WLLUf{*f*;C{4)_8]1>jS`*X/@?@_H%M` &iJN-<s' );
define( 'WP_CACHE_KEY_SALT', '_qp[8u6)oe7ZN1Bx~D47^F|#`JQ>.v,p}Rex5&mw]`k5n09|%KqAWvX[u(F#U-g-' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
