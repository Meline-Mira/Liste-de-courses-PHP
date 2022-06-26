<!DOCTYPE html>

<html>

    <head>
        <meta charset='utf-8'>
        <title>Liste de courses</title>
    </head>

    <body>
        <ul>
            <?php

                foreach($achats as $achat) {

                    echo '<li>';

                        if ($achat->pris) {
                            echo '<strike>'.$achat->quantite.' x '.$achat->produit.'</strike>';
                        } else {
                            echo $achat->quantite.' x '.$achat->produit;
                        }
                    
                    echo '</li>';
                }

            ?>
        </ul>
    </body>

</html>