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
define( 'DB_NAME', 'RyTech' );

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
define( 'AUTH_KEY',         ')mR#y!>/d*mSvaVm04g4^Cz 1SDVCo.l3HVpmMF>_(U%&Q7TyEb<[U4t(>D[w/f$' );
define( 'SECURE_AUTH_KEY',  '#u+=AqXL@AH&?[|05p%]SK!4Y>>fu&scRe;jO<4{CTp5f,ej7L{Ev-JS5U7&$Uc(' );
define( 'LOGGED_IN_KEY',    'H+oWp,i(+uWN7H58~DC}Ew~1f40FZy+^8k?V%(G3h~+K?B92OksLoQjirf:wya87' );
define( 'NONCE_KEY',        'yx2O_$HGPy{hRXp|2Vd:@n%A4sw7`l@is=~x!J/ @DhRX#T(]=u3cYvD=&ERI?B(' );
define( 'AUTH_SALT',        'tn}&,Jvwm^z5ogAe8LBtG* =n[q,hZs^y;oca}pXRg7}3(*v$kak6Hp)qtB<j`@=' );
define( 'SECURE_AUTH_SALT', '2}8^g.-.:rR@ovr{X~Ig]<xY^eS)1=d+$vp#.9Q2Yg.[,IYyv.XN;R6VVt|}7KcP' );
define( 'LOGGED_IN_SALT',   '*+H-XUWur{C}*.xS/HRDxPbP-Ivve-u 4`lhO{*_1wMLs: 57JM6THde;v9W@knw' );
define( 'NONCE_SALT',       'X$|NQX6,}3><6PY2pr.b:4`Nf9wd4`tzw;Vk~ny9>5a.3~tXl/1*5U@S5+_pulo1' );

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
