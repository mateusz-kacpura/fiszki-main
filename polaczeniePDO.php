<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=fiszki_nauka_slowek', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                      
?>