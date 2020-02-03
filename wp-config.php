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
define( 'DB_NAME', 'katrinegoeth' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R4Fx;~3MUW6vO)dKX#5$UM&35:YZqAGpeZ>2!WmS}Gf{)q0u PPQJwj}|>0v`DJ^' );
define( 'SECURE_AUTH_KEY',  'gQY=d1M(^:I0)B8<{xg3?}AOk9O3SmdE@nNF.Er0PJr3._^Uc8nrKT)kA>$GG=J.' );
define( 'LOGGED_IN_KEY',    'OdG.-A8%WzsHPJiB2zV7F@Krvdcuph&)A6A( M%8C#EU%b<IDiDto^T7G)rV6c>1' );
define( 'NONCE_KEY',        '!%qj#9@jn:eQeJZ#;Jjv,qsLVjaG-:[p^[S6zlS[5&jw x@=@@(beI_!VB><KGWZ' );
define( 'AUTH_SALT',        'H3TJf8|7o0W3DqU<m|[L*d8^iZ>rLL >pkm^Etzf&yi%IQv8w3zy1v`jCRERb.$@' );
define( 'SECURE_AUTH_SALT', '6P1yAa{,WtJ:aS`A2L!c_m*Z.i78Dm$YVV*V7!_(Z2_xAcClmOz>O-Q*o*$kt$f]' );
define( 'LOGGED_IN_SALT',   'j_7g5&F@[,p/TkOcNZ}Iy9se0J>qriQVo0gaYYT*~6trUvceL{x(Wg>3TbCmr)i1' );
define( 'NONCE_SALT',       'Sfr!t=4.GGPk@=7CL7rWSjXhE+-+BR8E7o#,f1,,Jr8FMoGf6PeYAl4n!6M%Vc(Y' );

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
