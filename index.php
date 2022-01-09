<?php

// Souvent on identifie cet objet par la variable $conn ou $db

try {
    $db = new PDO('mysql:host=localhost:8889;dbname=vap_factory;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$selectAll = 'SELECT * from vap_factory.produits';
$rows = $db->query($selectAll);
$produits = $rows->fetchAll();
var_dump($produits);

$create ="INSERT INTO `vap_factory`.`produits` (`Reference`, `Nom`, `Description`, `Prix_achat_unitaire`, `Prix_vente_unitaire`) VALUES ('10', 'blabla', 'pfff', '8', '0')";
$db->exec($create);
// mis à jour d'un produit
$update = "UPDATE `vap_factory`.`produits` SET `Quantite_stock`='24' WHERE reference ='10' ";
$db->exec($update);

$select = "SELECT * FROM vap_factory.produits WHERE reference = '10';";
$statment =$db->query($select);
$produit = $statment->fetchAll();
var_dump($produit);

$delete ="DELETE FROM `vap_factory`.`produits` WHERE (`Reference` = '10');";
$db->exec($delete);