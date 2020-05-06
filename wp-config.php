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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'V3!$<@^bM.~,)sz#~rWCKW%H!nqRb}Z{D<*!4%}p.Eu6vq.Oj[dN<poWV}eqIPgk' );
define( 'SECURE_AUTH_KEY',  '+cmZ]s>vC(8a+f*SS9${%4V*lqs6ksxk4}^@Xh0Yj;Fq_C:t(wZ$jm(8~q-5NxSv' );
define( 'LOGGED_IN_KEY',    't@X>=h]<)9bDe9D!R,fiM4=!4c~JgjAk6V?;^xQK;/9LW5~GA,qJ)3MD4k_L><>|' );
define( 'NONCE_KEY',        'q]iaVYz#[Q)>UnaLH9z35).;p7(-ylWsgUw+BuoE[VLaW>Z?vP_jRP&{OY.,8D;=' );
define( 'AUTH_SALT',        ' -!%SQs@W:JI.0v}o3,hDB7kqZ*PgM0.d.[3*H&BPm2n>8I&awjp b<Nur7?}b}w' );
define( 'SECURE_AUTH_SALT', '!M)? q4m6Wz-e;c&:AekDaUFjnSm0`.Lxcs~mx;$5jKI-A4MyZ,f;mtBIm; =/rx' );
define( 'LOGGED_IN_SALT',   'k3UzszCzGwbz2em@;m_M8LX`?6.w{;/fQIR$W^ln)/DAWD^@[4#f~}8.UOyiugJ7' );
define( 'NONCE_SALT',       'Pje7lal7E2m}</F&U1$mCr9Qz$9K,%UEBrHuE%*7|wc-qbtwyR^[S),To$Zi%wR~' );

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
