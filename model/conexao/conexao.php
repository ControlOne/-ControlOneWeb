<?php
$HOST = 'localhost:3306';
$USER = 'root';
$PASSWORD = 'root';
$DATABASE = 'controlone';

$conn = new PDO('mysql:host='.$HOST.';dbname='.$DATABASE,$USER,$PASSWORD);
 ?>
