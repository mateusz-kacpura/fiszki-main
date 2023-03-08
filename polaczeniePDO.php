<?php

$host = 'mysql:host=127.0.0.1; dbname=fiszki_nauka_slowek';
$server = 'mysql:host=127.0.0.1';
$databasename = 'fiszki_nauka_slowek';
$login = 'root';
$password = '';

$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);        

$pdo = new PDO($host, $login, $password, $option);
$pdo_set = new PDO( $server, $login, $password );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

?>