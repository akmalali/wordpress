<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bq-k*@TL{1tCp3UJ!fs_-f*Ey-+(+2*lQ(bZL`111k|U@0G]&P=n+>;OP=,^nZ`E');
define('SECURE_AUTH_KEY',  'lyc/?ezeuuBB-6++`13Z3ff6/D55wH*ZZ7uxb:V6{hLQ2>2e8m?:S`]_3hMli8Y.');
define('LOGGED_IN_KEY',    'U3[J#d=zQE+4F*m..(>a9}(W|l-L=[;rQyd<NU-D,(C|Rqu0JY5qRBeD#A;3AEgy');
define('NONCE_KEY',        'CE%d$!;x~r*6D)g++|P}u[KcM$6ramd^F^)-lC|O^iPN-Y%ifMQpp<,</dO*S.tT');
define('AUTH_SALT',        '^=Fx,WH.u~Km!6N|j>9@CN=W#,JPEb^cu=).lofJ/kRzUU9PfK3l&q/F.mBDLajf');
define('SECURE_AUTH_SALT', 'KV1Ij$Sm|)+&||zi3y^I/|cHaty<5#z}{c-f8,kw2)|I!DqFt]{@;|x=Y5Tq>|}_');
define('LOGGED_IN_SALT',   '$_#Z5c@I2&DgGPQlU$gyoj#o:h(.$:*}3R(N!3-0a2a9>|On:C{>=h-X-$${pThe');
define('NONCE_SALT',       'a9N|zVA+$gC|*QA;=j2mrnJ-;p_R&6k;,rEWJXD7W16Ps>mcW{;UJ,OUT<osL0J-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
