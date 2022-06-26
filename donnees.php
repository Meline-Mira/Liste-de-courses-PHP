<?php

function recupere_achats($pdo) {

    $requete = $pdo->prepare('select * from achats');

    $requete->execute();

    return $requete->fetchAll(PDO::FETCH_CLASS);
}