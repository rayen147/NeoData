<?php
require_once("../Config.php");
$connection=new PD0 (Array (
    'host' => $host,
    'username' => $user, 
    'password' => $password,
    'db'=> $db,
    'port' => $port,
    'prefix' => $prefix,
    'charset' => 'utf8'));
?>