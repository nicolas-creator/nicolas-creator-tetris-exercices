-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table produits.fournisseurs : ~0 rows (environ)
/*!40000 ALTER TABLE `fournisseurs` DISABLE KEYS */;
INSERT INTO `fournisseurs` (`num_F`, `nom`, `ville`) VALUES
	(1, '1\r\n\r\nFOURNISSEUR', 'GRASSE'),
	(2, '2FOURNI', 'CANNES'),
	(3, '3FO', 'NICE');
/*!40000 ALTER TABLE `fournisseurs` ENABLE KEYS */;

-- Listage des données de la table produits.fournitures : ~0 rows (environ)
/*!40000 ALTER TABLE `fournitures` DISABLE KEYS */;
INSERT INTO `fournitures` (`num_f`, `code_p`, `quantite`) VALUES
	(1, 1, 1),
	(1, 4, 4),
	(2, 2, 2),
	(2, 3, 5),
	(3, 2, 6),
	(3, 3, 3);
/*!40000 ALTER TABLE `fournitures` ENABLE KEYS */;

-- Listage des données de la table produits.produits : ~0 rows (environ)
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` (`code_p`, `libelle`, `origine`, `couleur`) VALUES
	(1, 'FOURNI', 'FRANCE', 'BLEU'),
	(2, '2FOURNI', 'CHINE', 'ROUGE'),
	(3, '3FOUR', 'ITALIE', 'ROSE'),
	(4, '4FO', 'ESPAGNE', 'MARON');
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
