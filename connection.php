<?php

function connection() {

    require 'configuration.php';

    try {
        return new PDO ($lien."; dbname=".$baseDeDonnees, $nom, $mdp);

    } catch (PDOException $e) {
        
        die ($e->getMessage());
    }
}