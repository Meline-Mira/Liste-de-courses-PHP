<?php

require 'connection.php';

require 'donnees.php';

$pdo = connection();
$produit = $_POST['produit'];
$quantite = $_POST['quantite'];

creer_achat($pdo, $produit, $quantite);

header('Location: /');