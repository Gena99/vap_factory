-- Creation du schema
CREATE DATABASE `vap_factory` /*!40100 DEFAULT CHARACTER SET utf8 */;
-- creation de la table produits
CREATE TABLE `produits` (
                            `Reference` varchar(45) NOT NULL DEFAULT '',
                            `Nom` varchar(45) NOT NULL,
                            `Description` varchar(255) NOT NULL,
                            `Prix_achat_unitaire` decimal(2,2) NOT NULL,
                            `Prix_vente_unitaire` decimal(2,2) NOT NULL,
                            `Quantite_stock` int(11) NOT NULL,
                            PRIMARY KEY (`Reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- READ
SELECT * FROM vap_factory.produits;
SELECT * FROM vap_factory.produits WHERE reference = "89";
-- CREATE
INSERT INTO `vap_factory`.`produits` (`Reference`, `Nom`, `Description`, `Prix_achat_unitaire`, `Prix_vente_unitaire`) VALUES ('123', 'blabla', 'pfff', '8', '0');--
-- DELETE
DELETE FROM `vap_factory`.`produits` WHERE (`Reference` = 'tst');
-- UPDATE
UPDATE `vap_factory`.`produits` SET `Quantite_stock`= "20" WHERE reference ="89";
