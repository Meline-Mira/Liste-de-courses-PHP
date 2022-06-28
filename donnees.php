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

function prendre_achat($pdo, $id) {

    $requete = $pdo->prepare('UPDATE achats SET pris = 1 WHERE id = :id');

    $requete->execute(['id' => $id]);
}

function supprimer_pris($pdo) {

    $requete = $pdo->prepare('DELETE FROM achats WHERE pris = 1');

    $requete->execute();
}

function supprimer_liste($pdo) {

    $requete = $pdo->prepare('DELETE FROM achats');

    $requete->execute();
}