<?php
/**
 * Generated by yentu on 2nd February, 2015 09:16:58
 */
$db = require 'config/db.conf.php';

$config = array(
    'driver' => $db['driver'],
    'host' => $db['host'],
    'port' => $db['port'],
    'dbname' => $db['dbname'],
    'user' => $db['user'],
    'password' => $db['password'],
    'file' => $db['file']
);