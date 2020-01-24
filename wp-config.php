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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quizz' );

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
define( 'AUTH_KEY',         'zpjNq9E}@>W-,~?ru5`eA,G 0_KtMw.eKH7MR.~??[o^8JmuHDna;`IA}Q@TN(G*' );
define( 'SECURE_AUTH_KEY',  '>_qa[|<gW#Gs#XYAad%1W(SLloCN}!O/Mc|$N?D=i`5i0Z[Ry7}1=Mqh5bHpM,};' );
define( 'LOGGED_IN_KEY',    'lxQgo.Hg!e{qnyXOEJPYyf5vSfRV)%!.aY=LI2((=zz^3.fk7oSi+>%KZkGU0(xK' );
define( 'NONCE_KEY',        'xXF/f>pm82K>x/TE:VAu9$Jm<R6)b/X4 jVzy6B4,l&Ak*Hwv0+6,f-NxE}2nLx1' );
define( 'AUTH_SALT',        'yi[~+U5?e=spQL>M[PL>NCWe2*e`|hpLm/B(l9gpE87^Ze~FE{m-w<iaku&&E@YV' );
define( 'SECURE_AUTH_SALT', 'tU_phiT3=xkv!$-<>uq>)Gb%nDYT&2l=3GSu.sBPA6kH^6zSCi1?4xva&O6K!.E4' );
define( 'LOGGED_IN_SALT',   '1aTr[={L=^Ve%zgV},[+s/.*o[Zj.YZ{B 6wK/+:M7y3|Q6JX_|b`ZrsA&IT1-P7' );
define( 'NONCE_SALT',       'lUzw3(D+>#C#%+l_,)kb)%%WX!}/(v(7BFz;fS.6{/sO*S~apQIxmRNClyAk`/>_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
