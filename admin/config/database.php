<?php defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'	        => '',
    'hostname'      => '127.0.0.1',
    'username'      => 'root',
    'password'      => '123456',
    'database'      => '711cms',
    'dbdriver'      => 'mysqli',
    'dbprefix'      => 'm_',
    'port'          => '3306',
    'pconnect'      => FALSE,
    'db_debug'      => TRUE,
    'cache_on'      => FALSE,
    'cachedir'      => '',
    'char_set'      => 'utf8',
    'dbcollat'      => 'utf8_general_ci',
    'swap_pre'      => '',
    'encrypt'       => FALSE,
    'compress'      => FALSE,
    'stricton'      => FALSE,
    'failover'      => array(),
    'save_queries'  => TRUE
);
