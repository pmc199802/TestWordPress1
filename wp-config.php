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
define( 'DB_NAME', 'testwordpress1_db' );

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
define( 'AUTH_KEY',         'dj:qMJH]Ll}44N!]_q{JGQP;E[]e5$$EixvL]?62PT5>wI~Eh.?.wFibviq,:fZf' );
define( 'SECURE_AUTH_KEY',  '>ehz]jhe`SqKdD}ZACG[pcm0gHm<vWBZxv@Tj(L9J U7qR/!`BRy?!}e:43n+!]5' );
define( 'LOGGED_IN_KEY',    'I_N $$?5^*]t(enfNr|iXOfeM-Pf!1[zR>$Ayl+$VoTS@6.|Wx;qYJJ>(GppC((X' );
define( 'NONCE_KEY',        '6fm3&YLnZ3baJnW7]%oFY(4c_g)Vg:C)BD8x42~^MT-1*Z.Xb{#gtb6DC{;jVu7U' );
define( 'AUTH_SALT',        '?_S-c)B6qPsn&&(i<{G]37f0 |to>J.p$;McG3B/]W^Ic() l5spo+E/`-Z.orI[' );
define( 'SECURE_AUTH_SALT', 'DQh+Qs9XX!BC}j^,8?>_(=Vva7Y[vwiswd2frNk&^0&pDeZaCquW!w]tJ~^x8Tx4' );
define( 'LOGGED_IN_SALT',   'j+X6DB]^8h2EC|b7b]O[xqzOmROP`FpEDGg32I!0n@R{i6IKJy{y[*VP-i@wda<t' );
define( 'NONCE_SALT',       '5o_pQ+BL&3{Of~e/^9jhg&xs9ZG&zX3{LFkp4n$Z-WH0-Wb=!:F9[E7)pq&i 2_9' );

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
