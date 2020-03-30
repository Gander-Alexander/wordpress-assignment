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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '#JyXE$uB2<D!x,j3xcBW{[{^@CI01zmKnF%eqy?AmBb|l1rG*cN$9PcUJzFm~kg7' );
define( 'SECURE_AUTH_KEY',  'h9EK4yqY_<]ul.Q]VX%>jE8<z&OA+J?X3_2K;?bT&T]esF`.js:CPm,c8_t&iLZ4' );
define( 'LOGGED_IN_KEY',    ')QUR$t0z4Q|o^X=M=)dDFT*T5!~}?zq!W<#SL5{k<3xU;.YOefuEoR[3g(%]>90Q' );
define( 'NONCE_KEY',        'W9ys;?UM.JZ7J8gcg>n3i|Yz9L4oI}X EL~,>W|NM^;N0DU:)UBAJR@n:Ksf!!mV' );
define( 'AUTH_SALT',        'CjW$VFq;>E&AFU%Ioe?F7P(JiTZZ )At?/=1#$d@?XD(|E!ZJN  <+M 9aqKl-`u' );
define( 'SECURE_AUTH_SALT', 'CKm6T,@iT DE]!:Nqz,p+(XLKi^ldT2A_d/;0@R:E:/;.(9+GoS*L-CgZ.3NK $i' );
define( 'LOGGED_IN_SALT',   'E<L?P1y8.U?vOSQ$MriKgX>nX[?X|rLyAf{.Df1trrT^51_MAX2Y]gFti}Cw!u[u' );
define( 'NONCE_SALT',       '?7F3,8^xqk!(|9kC~mqqI=G5Hifpy64[,jxPihCO3@/@Z9T!,-fyl-7Q_,lKY :t' );

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
