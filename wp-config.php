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
define( 'DB_NAME', 'Portfolio-rk_db' );

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
define( 'AUTH_KEY',         'v$4J|V&JGbSrHl04`IuJD#3oh/egq:3[dy[q1FLy3?O9Ver1><C,RLxjE. QipiW' );
define( 'SECURE_AUTH_KEY',  '<A+i.t[PQuQ?Tn><=.q_4-7ygdqtZ`O8Q/y6`xsB%6!Hp|FO=_]Mnhfu%SXGQ<9S' );
define( 'LOGGED_IN_KEY',    'O$R;J>.eXVG-c+e3%wrbDQ9^6O}VB{fskAyk7.Cu%0LGV<>r1K_/I=Y?)9zR|>BZ' );
define( 'NONCE_KEY',        'Q=FZGNc|U^/Ets-JjEqb^|ko/fdH5PG$UZb_jD2d Z{wjO8 <W40NhsKZX+tPkTX' );
define( 'AUTH_SALT',        'TLrr#@B0jZ0Dj7<FhK>;8[$Q$*r_B4F9tqJ?%6#FVdsbM;[#uJS2S[tH9Hc*F.y#' );
define( 'SECURE_AUTH_SALT', 'gJ%=:wU-r[4a}uHLS$6{]os!`xteR[~XG9R]tE$o6&. I,8zXl@`MGQ;jtK?:8A.' );
define( 'LOGGED_IN_SALT',   ' Y@Ac,`a^kuuq6w}G0vy%_~0N8-0hzIl)_NtD,9Dq&)<QgC@EMWt-(qW@,42/iA#' );
define( 'NONCE_SALT',       '+YoXpeJO(v/^yV4*h#3DYq_=**<DJF $b@bK!1WBk;HQJS@}ke72[n^;T]*oP8z:' );

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
