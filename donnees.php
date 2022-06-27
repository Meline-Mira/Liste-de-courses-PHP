<?php

function recupere_achats($pdo) {

    $requete = $pdo->prepare('SELECT * FROM achats');

    $requete->execute();

    return $requete->fetchAll(PDO::FETCH_CLASS);
}

function creer_achat($pdo, $produit, $quantite) {

    $requete = $pdo->prepare('INSERT INTO achats (produit, quantite) VALUES (:produit, :quantite)');

    $requete->execute(['produit' => $produit, 'quantite' => $quantite]);
}
