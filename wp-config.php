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
define( 'DB_NAME', 'mtc' );

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
define( 'AUTH_KEY',         '!vm<||w(Bacq&Mh|ky%L`X3n[z%y9*jglsSli)siE~[!?$`@u$Mp!ZtQ5KIPH4<g' );
define( 'SECURE_AUTH_KEY',  'z!c+w@j0$F*[KmU7JPJuU:npGT`X ^Z;+XhA=AKq6jwWsba(coT9SRVME51]r3mK' );
define( 'LOGGED_IN_KEY',    'WsNX SwRSf{adrTV4i2,ZSM[g( ]xK/U-H4ekVS.c?[IQC!0f,I1K=rKf]+zZs6 ' );
define( 'NONCE_KEY',        'r*xtg<PtArA/LM|_P/  P<EH13ii<=`4b4fX|{o2n]JPwtS/WQZ[ywr:~]6vW5mE' );
define( 'AUTH_SALT',        '2yCJ,72hGG->K|,axeq84Dx}8bGzO#rO&u^6!|5AtvEI=0#(lgHwX.+6|m?(b7X?' );
define( 'SECURE_AUTH_SALT', 'D1*a<~#P=0gB4,Ak1e`U}WDjSK31(i/cEkhEjR,KM,%CK](1pD-~]U3t0J.hEyaZ' );
define( 'LOGGED_IN_SALT',   'X.G(!M=Q#5zps4[peYK&RIL%[@:rG<3_:@R_0{aG8~gkGT2 yXaCti?o|fTGL{#?' );
define( 'NONCE_SALT',       ' c2T/Z7xv=7Y&P52rH9?cMgQ?Kj?IOi{tPg78sch9 yBvvZq<Aa!&(OPTZ91>-O7' );

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
