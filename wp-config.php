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
define( 'DB_USER', 'bvv' );

/** Database password */
define( 'DB_PASSWORD', 'tesoro88' );

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
define('AUTH_KEY',         '+Q|ahP $~B>PL-C:&jHYy)DL$Rz1dh[mtr!?7uJN$4K%PgO&W_r~Vu~)X68/ }Cz');
define('SECURE_AUTH_KEY',  '*;pt1j)Cpmr7>;?yC]+<Wg0s{Vg}}+N8$8[qe)p:4AgL$gRh/.c(,Xkt&m:.n>`9');
define('LOGGED_IN_KEY',    '8xn>hjqj|{nM>,GL2:9Ke-#*#34BH>}5/&W30.-x-?59=T,zD!O-;[D*l+swNy]E');
define('NONCE_KEY',        'iho|9cL~SVdWeIl6S2!aL-pD*l:iSp?Hk-<O^]se(XEJ-|fkfD2nMxBVyGui| pD');
define('AUTH_SALT',        '1&FeLw6J`+>>*T->Q$*dn-#}SV5=]EWk+Fwsg5jne>Q+;tp>waAz%A|ZjT+|EGOG');
define('SECURE_AUTH_SALT', '+Z3Z7X(q^ _<ZllgHQh8MLb+,sK+#|q:+3ho9_bru+i8`:0gUMGD906$bbS3Qb:+');
define('LOGGED_IN_SALT',   '=0H}N/}n^yg@5OEJ4?B=Sw=B =y$}*^Y?:VRQ-X+CU$/uV^+5Md%akR{Q-Bk(Unj');
define('NONCE_SALT',       'o~2yRQ!okrOe%zP-j|#6Y;kL8A=X{!]W32_ oFa#4`+83|f0Hi;+1zX(1Jtuu{wl');

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
