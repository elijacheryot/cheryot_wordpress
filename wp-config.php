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
define( 'DB_NAME', 'cheryot_db' );

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
define( 'AUTH_KEY',         'fiWmO>3(<o>/rf^)Vj{NY{p2u:^hYxv(Fp_5~NNm2wPsn&yY_*(x$cqVXB&Tp&aO' );
define( 'SECURE_AUTH_KEY',  'y1P#+[]]?CA;m+b^3qBui98@KGv<%-cg>su@~)yD_!-=EG@>ui5uUT1xQ`&O|=&G' );
define( 'LOGGED_IN_KEY',    ' ~68<[heca~gy|NrdPL a#/ir=mqI*Q37WjiddR:k6HmhrFg;6W^`32v*0oFHP(7' );
define( 'NONCE_KEY',        'EwN(YZW6.U{z9/jeEB @]:$_*,E{Mj6gP1X)=Z>tQyk (Jm5QxR8l=x/XP(ydT |' );
define( 'AUTH_SALT',        '-84jZD~*3:wC{- O00fhiU$977u+XGaz.b,[ho#*@+d312M(+(8+JcyklLt&t#c3' );
define( 'SECURE_AUTH_SALT', 'OQq( ~ +K2Z`|?}RZ<| Aj`A#;$LtPIyzKAnJUe%BU=HJ5U:AZ*6tSVpaH)o>nhp' );
define( 'LOGGED_IN_SALT',   '#l]DAaB~{Tc=r@`Yw[~5^CMpHM$FS|j_<%i_@LG,P3Q~9&;C/Q>jP;~H7B1?]KE,' );
define( 'NONCE_SALT',       'QU6S+/]yb(TBL1:D%{r%xT`F~>Etj08*D=wj_Vjf:[@azAnO[)mDG;uWlv?oVOu6' );

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
