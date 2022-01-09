<?php

// Souvent on identifie cet objet par la variable $conn ou $db

try {
    $db = new PDO('mysql:host=localhost:8889;dbname=vap_factory;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>

