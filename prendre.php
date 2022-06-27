<?php

require 'connection.php';

require 'donnees.php';

$pdo = connection();
$id = $_GET['id'];

prendre_achat($pdo, $id);

header('Location: /');