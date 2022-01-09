<?php

// Souvent on identifie cet objet par la variable $conn ou $db

try {
    $db = new PDO('mysql:host=localhost:8889;dbname=vap_factory;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$select = 'SELECT * from vap_factory.produits';
$rows = $db->query($select);
$produit = $rows->fetchAll();
var_dump($produit);

$create ="INSERT INTO `vap_factory`.`produits` (`Reference`, `Nom`, `Description`, `Prix_achat_unitaire`, `Prix_vente_unitaire`) VALUES ('10', 'blabla', 'pfff', '8', '0')";
$db->exec($create);

