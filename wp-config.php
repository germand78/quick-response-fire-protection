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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fireprotection' );

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
define( 'AUTH_KEY',         'Cmdk:h{f[`xf_>S*I`MKpfBUszC$=pC@U%1^&%ikt<STE{vrax 74lU2w3a2-U-I' );
define( 'SECURE_AUTH_KEY',  '`p1aq(ZnaP.`eUfLb#/L!MlEQ,;U:h! Kb!ceEuBwv<r=~r>rg%GBjDyc:{TxXwU' );
define( 'LOGGED_IN_KEY',    'uPR>sLtbFA-^j|.OOv3a) 4?,!L?`x4^GB_fp@IYvV&o-PuO7r@9`@PgG~F>1f-Z' );
define( 'NONCE_KEY',        'Df ZQ2cB{>gRD:+r$c ~r.afzACTwgJmYIvp2Oz <E2$<#9QOs:pLdTMN-s597o|' );
define( 'AUTH_SALT',        ',P0&c:9c/hC1}QfR{WAKO6*G#8pNdIZ^3F4n/Q*Mr2yOeW|}q)sc~o>D(ZB-cyJe' );
define( 'SECURE_AUTH_SALT', 'awmucJ.k?[ ;kq}#t(/&-^F=PwI*:H[WHXayyK7B 9bR>,YYPA^oZ02ZCP3tRwWP' );
define( 'LOGGED_IN_SALT',   'MZ479c90Z.{s{pSr4(`I(o~qW#>H]s]TWsS]DT_dMbVY;9B<-NRj6d0+A^cyx/5,' );
define( 'NONCE_SALT',       '2{g#t W15E ZTaoM?CIU%iR_.xu9)YEvszBLawm_pCfI1(uxcjvSxjTGP{>lMEz,' );

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
