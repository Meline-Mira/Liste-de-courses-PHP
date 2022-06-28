<?php

require 'connection.php';

require 'donnees.php';

$pdo = connection();

if (isset($_POST['supprimer_pris'])) {

    supprimer_pris($pdo);

} else {

    supprimer_liste($pdo);

}

header('Location: /');
