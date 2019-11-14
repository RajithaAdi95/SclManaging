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
define( 'DB_NAME', 'sclmanage_db' );

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
define( 'AUTH_KEY',         '(,KIf?C;?.1e/`o*P%d`pc(Bu|j2eH$n#T&:fPkewFZ D2;.1g-su(qwDr*63p}H' );
define( 'SECURE_AUTH_KEY',  '+0WSQc &t7&O4Gt>bZZ`7UKfM]3:=V-{zr(S#pvY]PJEv m.{# XwoSWrs(or*Im' );
define( 'LOGGED_IN_KEY',    'h<F*oTc][EK5^g< gPE|z$!8(J9Om4_X&&hl2?ML>29T#d!ofr/F`IW2`eDV.X%C' );
define( 'NONCE_KEY',        'd]za|[`#5H~?KJq(;Kh`<wGw_lD%n|/H)HZin:;v O<qTc`NI}XF_~0K47s2W-`j' );
define( 'AUTH_SALT',        '/Z}qh0lnNXL{/f(=ceUv3au]+P[1SWoLq[u1aSSJD6NX[D$W!1mhiEY1bA$u!4n,' );
define( 'SECURE_AUTH_SALT', '^/?eOMpiwk};iUrKVKG9g/U`?c{=}MY*}=g!)EqEJDB6r5|N?jS^AM>V+mL=-d0i' );
define( 'LOGGED_IN_SALT',   '>*H7jiX1HN.-][{dLYS1;M0R[7vf6MW#i+wIS&U27q1lK`ae``~TUXq-q-{DhCx2' );
define( 'NONCE_SALT',       'S6~*1nwA/d~X7)X/B2Si}1miyXdo;7c7^,2^}WV/4%kyh}R+irqM A/c#Y)Vk]85' );

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
