<?php
$vars = [
  'DB_NAME' => 'wordpress',
  'DB_USER' => 'root',
  'DB_PASSWORD' => '',
  'DB_HOST' => 'mysql-master',
  'DB_CHARSET' => 'utf8',
  'DB_COLLATE' => '',
  'AUTH_KEY' => 'put your unique phrase here',
  'SECURE_AUTH_KEY' => 'put your unique phrase here',
  'LOGGED_IN_KEY' => 'put your unique phrase here',
  'NONCE_KEY' => 'put your unique phrase here',
  'AUTH_SALT' => 'put your unique phrase here',
  'SECURE_AUTH_SALT' => 'put your unique phrase here',
  'LOGGED_IN_SALT' => 'put your unique phrase here',
  'NONCE_SALT' => 'put your unique phrase here',
  'WP_DEBUG' => false
];
foreach ($vars as $var => $default) {
  $env = getenv($var);
  define($var, $env === false ? $default : $env);
}

$table_prefix  = 'wp_';

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
