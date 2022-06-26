<?php

require 'connection.php';

require 'donnees.php';

$pdo = connection();
$achats = recupere_achats($pdo);

require 'index.view.php';