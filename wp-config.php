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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3#Zd~`|aRsAhqHt`:PLs&4Q@l~H8}8FPl>a#4%Rz!5O$)zf([Ry0bP#Q2.ws%v*)' );
define( 'SECURE_AUTH_KEY',  'h[eq+/o:QD,u30H:jwKG_Nv[nC_tha3zRf;wKN*k2$45W}P{-+6CI8OX-M2>0?(u' );
define( 'LOGGED_IN_KEY',    'p{s4condB_MtIJSi1du?aNg`t*Ug+M=1|Bj0ewt[k`.X7Aq0b[9+|E(<$x@EFVy6' );
define( 'NONCE_KEY',        '$bFe:3lyGoAD[5+|u1}`PPL7A(2~g.Mx]>Ia,Oqpw}#K9]`NzdN5bSQRlmT@I&;%' );
define( 'AUTH_SALT',        'VFK!N^r?ExZ*}{C@|25oWyIjacNTfl8bs-qro/@QY:Mk@p0la&P4X$(nQuQ[#_B~' );
define( 'SECURE_AUTH_SALT', '|/R~<b[q7Yho6$HhQ5oMxsxVhu2_:<vh)4YX6kYp_HBIQ:lPNj78VNFQ<NwQq6)Y' );
define( 'LOGGED_IN_SALT',   '1/ZeH4%0h=%Oo+BE^o iz[7Kj_OC)G,gcg~g}DxC4=~ p03)F4I76C!C@s[[E7)Q' );
define( 'NONCE_SALT',       'ChEBorX~|06vnC,q*T7{IR+DOFWUTOyL:t J+[IDN#-pu??g_X}L>52j^rfayqb`' );

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
