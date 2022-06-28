# Liste de courses PHP

Ceci est un projet personnel qui m'a permis d'apprendre à utiliser les bases de PHP.

Ce programme permet de créer une liste de courses, rayer les produits déjà pris, supprimer les produits déjà pris de 
la liste et supprimer toute la liste.

## Installation

Copier le fichier `configuration.php.exemple` vers `configuration.php`.

Créer une base de données SQL avec la table suivante :

```sql
CREATE TABLE `achats` (
  `id` int NOT NULL AUTO_INCREMENT,
  `produit` text NOT NULL,
  `quantite` int NOT NULL,
  `pris` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
``` 

Configurer le fichier `configuration.php` avec les identifiants de la base de données créée.
