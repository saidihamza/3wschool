<?php
try {
$cnx = new PDO('mysql:host=localhost;dbname=3wacademy;charset=utf8', 'root',
'');
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
