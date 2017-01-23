<?php
$vars = array('DB_NAME',
'DB_USER',
'DB_PASSWORD',
'DB_HOST',
'DB_CHARSET',
'DB_COLLATE',
'AUTH_KEY',
'SECURE_AUTH_KEY',
'LOGGED_IN_KEY',
'NONCE_KEY',
'AUTH_SALT',
'SECURE_AUTH_SALT',
'LOGGED_IN_SALT',
'NONCE_SALT',
'WP_DEBUG');
foreach ($vars as $var) {
  define($var, getenv($var));
}

$table_prefix  = 'wp_';

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
