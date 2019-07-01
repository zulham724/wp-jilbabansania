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
define( 'DB_NAME', 'speedcub_wp284' );

/** MySQL database username */
define( 'DB_USER', 'speedcub_wp284' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P]-S5U36mp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '8d1neuq43a7ox4dqql9bnmnjv1sseibtyjgaj037pgytxpgh1tcgugg7ymoetrtm' );
define( 'SECURE_AUTH_KEY',  'eib9h3upqz1imk0l3ok00ehfkpmwqgmcfwwwu5ta4nhdj14uat9knwpltfnxp95j' );
define( 'LOGGED_IN_KEY',    '9ssksct2n3ptobvt8ak6arqsdbfhhxfai1bxojyr2ikk26do4ep3mylpjytukkyr' );
define( 'NONCE_KEY',        'jxs5u3kt7vrmxd3amwg9dycy9dhkwavva49zgcpdzcgc3tm9gghnlzbulnb2mbfj' );
define( 'AUTH_SALT',        'qrr8b0aqb9q47ujyghbvmupjuzc2oo0gxxeiokbblifrrrherl8jvxclj0mxsu4t' );
define( 'SECURE_AUTH_SALT', 'yqgnbmap6gojq2nmtqveqz4cuj09el5zugs4diap53ijeq8rson1u7xbid1jrba5' );
define( 'LOGGED_IN_SALT',   'wnsj8abjhjzmqctm4daepoygzcbuw6tbmgxnavt2unelykssc0nxzyssriqhy4ja' );
define( 'NONCE_SALT',       'fcigz7d5hjeiigoonrw1rir5v1azlukyo7dlo9astxlnpoxx45mdy2jkgxlwiitg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpaf_';

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

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

