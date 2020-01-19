<?php

$hostname='localhost';
$username='root';
$password='';
$database='webshopp2';

$connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
$nwl='<br>';
//verbinding testen
?>
