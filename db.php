<?php
$dsn = 'mysql:host=localhost;dbname=SNCT';
$username = 'root'; 
$password = '';
$options = [];

try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
  die('Erreur: '.$e->getMessage());
}



